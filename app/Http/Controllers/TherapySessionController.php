<?php

namespace App\Http\Controllers;

use App\Models\TherapySession;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TherapySessionController extends Controller
{
    public function index(): View
    {
        $sessions = auth()->user()
            ->therapySessions()
            ->latest('played_at')
            ->paginate(10);

        return view('sessions.index', compact('sessions'));
    }

    public function create(): View
    {
        return view('sessions.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'song_title' => ['required', 'string', 'max:255'],
            'difficulty' => ['required', 'in:easy,medium,hard'],
            'hand_used' => ['required', 'in:left,right,both'],
            'score' => ['required', 'integer', 'min:0'],
            'max_combo' => ['required', 'integer', 'min:0'],
            'accuracy' => ['required', 'numeric', 'min:0', 'max:100'],
            'duration_seconds' => ['required', 'integer', 'min:10', 'max:3600'],
            'gestures_hit' => ['required', 'integer', 'min:0'],
            'gestures_missed' => ['required', 'integer', 'min:0'],
            'notes' => ['nullable', 'string', 'max:1000'],
            'played_at' => ['required', 'date'],
        ]);

        auth()->user()->therapySessions()->create($validated);

        return redirect()->route('sessions.index')
            ->with('status', 'Therapy session recorded successfully.');
    }

    public function edit(TherapySession $therapySession): View
    {
        abort_if($therapySession->user_id !== auth()->id(), 403);

        return view('sessions.edit', ['session' => $therapySession]);
    }

    public function update(Request $request, TherapySession $therapySession): RedirectResponse
    {
        abort_if($therapySession->user_id !== auth()->id(), 403);

        $validated = $request->validate([
            'song_title' => ['required', 'string', 'max:255'],
            'difficulty' => ['required', 'in:easy,medium,hard'],
            'hand_used' => ['required', 'in:left,right,both'],
            'score' => ['required', 'integer', 'min:0'],
            'max_combo' => ['required', 'integer', 'min:0'],
            'accuracy' => ['required', 'numeric', 'min:0', 'max:100'],
            'duration_seconds' => ['required', 'integer', 'min:10', 'max:3600'],
            'gestures_hit' => ['required', 'integer', 'min:0'],
            'gestures_missed' => ['required', 'integer', 'min:0'],
            'notes' => ['nullable', 'string', 'max:1000'],
            'played_at' => ['required', 'date'],
        ]);

        $therapySession->update($validated);

        return redirect()->route('sessions.index')
            ->with('status', 'Therapy session updated successfully.');
    }

    public function destroy(TherapySession $therapySession): RedirectResponse
    {
        abort_if($therapySession->user_id !== auth()->id(), 403);

        $therapySession->delete();

        return redirect()->route('sessions.index')
            ->with('status', 'Therapy session deleted.');
    }
}

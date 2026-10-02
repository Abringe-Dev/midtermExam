<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $user = auth()->user();

        $sessions = $user->therapySessions()->latest('played_at')->get();

        return view('dashboard', [
            'totalSessions' => $sessions->count(),
            'avgScore' => round($sessions->avg('score') ?? 0),
            'maxScore' => $sessions->max('score') ?? 0,
            'avgAccuracy' => round($sessions->avg('accuracy') ?? 0, 1),
            'bestCombo' => $sessions->max('max_combo') ?? 0,
            'recentSessions' => $user->therapySessions()->latest('played_at')->take(5)->get(),
        ]);
    }
}

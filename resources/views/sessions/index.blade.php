<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-end justify-between gap-3">
            <div>
                <p class="measure">THERAPY LEDGER</p>
                <h2 class="display-tight font-extrabold text-2xl text-ink leading-tight mt-1">My Therapy Sessions</h2>
            </div>
            <a href="{{ route('sessions.create') }}" class="btn-care !px-5 !py-2.5">Log Session</a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 bg-pine-wash border border-pine/30 text-pine-deep px-4 py-3 rounded-card text-sm font-semibold">{{ session('status') }}</div>
            @endif

            <div class="ledger p-7 sm:p-8">
                @if ($sessions->isEmpty())
                    <p class="text-ink-soft text-sm py-4">No sessions yet. <a href="{{ route('sessions.create') }}" class="font-bold text-pine underline">Log your first therapy session</a>.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="text-left border-b border-rule">
                                    <th class="measure font-semibold py-2 pr-4">Song</th>
                                    <th class="measure font-semibold py-2 pr-4">Grade</th>
                                    <th class="measure font-semibold py-2 pr-4">Hand</th>
                                    <th class="measure font-semibold py-2 pr-4 text-right">Score</th>
                                    <th class="measure font-semibold py-2 pr-4 text-right">Combo</th>
                                    <th class="measure font-semibold py-2 pr-4 text-right">Accuracy</th>
                                    <th class="measure font-semibold py-2 pr-4 text-right">Hit / Miss</th>
                                    <th class="measure font-semibold py-2 pr-4">Played</th>
                                    <th class="measure font-semibold py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sessions as $s)
                                    <tr class="border-b border-rule/70 last:border-b-0 hover:bg-paper/60">
                                        <td class="py-3 pr-4 font-bold whitespace-nowrap">{{ $s->song_title }}</td>
                                        <td class="py-3 pr-4 whitespace-nowrap"><span class="inline-flex items-center gap-1.5 text-xs font-bold"><span class="grade-dot bg-rung-{{ $s->difficulty === 'easy' ? 'easy' : ($s->difficulty === 'medium' ? 'medium' : 'hard') }}"></span>{{ ucfirst($s->difficulty) }}</span></td>
                                        <td class="py-3 pr-4 text-ink-soft">{{ ucfirst($s->hand_used) }}</td>
                                        <td class="py-3 pr-4 font-mono text-right tnum">{{ number_format($s->score) }}</td>
                                        <td class="py-3 pr-4 font-mono text-right tnum">{{ $s->max_combo }}</td>
                                        <td class="py-3 pr-4 font-mono text-right tnum">{{ $s->accuracy }}%</td>
                                        <td class="py-3 pr-4 font-mono text-right tnum">{{ $s->gestures_hit }} / {{ $s->gestures_missed }}</td>
                                        <td class="py-3 pr-4 text-ink-soft whitespace-nowrap">{{ $s->played_at->format('M d, Y H:i') }}</td>
                                        <td class="py-3 whitespace-nowrap">
                                            <a href="{{ route('sessions.edit', $s) }}" class="inline-block font-bold text-pine hover:underline px-2 py-2.5 -ml-2">Edit</a>
                                            <span class="text-rule mx-1" aria-hidden="true">·</span>
                                            <form method="POST" action="{{ route('sessions.destroy', $s) }}" class="inline" onsubmit="return confirm('Delete this session?')">
                                                @csrf @method('DELETE')
                                                <button class="inline-block font-bold text-rung-hard hover:underline px-2 py-2.5">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">{{ $sessions->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

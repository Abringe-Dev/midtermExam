<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap items-end justify-between gap-3">
            <div>
                <p class="measure">THERAPY LEDGER</p>
                <h2 class="display-tight font-extrabold text-2xl text-ink leading-tight mt-1">
                    {{ __('Grip Restore Dashboard') }}
                </h2>
            </div>
            <a href="{{ route('sessions.create') }}" class="btn-care !px-5 !py-2.5">Log Session</a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="ledger p-7 sm:p-8">
                <div class="grid md:grid-cols-12 gap-8">
                    <div class="md:col-span-4">
                        <p class="measure">SESSIONS COMPLETED</p>
                        <p class="display-tight font-extrabold text-6xl text-ink mt-2 tnum">{{ $totalSessions }}</p>
                        <p class="mt-2 text-sm text-ink-soft">Steady work. Every rep is on the record.</p>
                    </div>
                    <div class="md:col-span-8 md:border-l md:border-rule md:pl-8">
                        <div class="rung-row">
                            <span class="grade-dot bg-pine shrink-0" aria-hidden="true"></span>
                            <div class="flex-1">
                                <div class="flex items-baseline justify-between gap-4">
                                    <p class="text-sm font-bold">Average score</p>
                                    <p class="font-mono font-semibold text-lg text-ink tnum">{{ number_format($avgScore) }}</p>
                                </div>
                                <div class="mt-2 h-2 rounded-full bg-paper-deep overflow-hidden" aria-hidden="true">
                                    <div class="h-full rounded-full bg-pine/70" style="width: {{ $maxScore > 0 ? min(100, round(($avgScore / $maxScore) * 100)) : 0 }}%"></div>
                                </div>
                                <p class="measure mt-1.5">AVERAGE AGAINST YOUR BEST SESSION</p>
                            </div>
                        </div>
                        <div class="rung-row">
                            <span class="grade-dot bg-rung-medium shrink-0" aria-hidden="true"></span>
                            <div class="flex-1">
                                <div class="flex items-baseline justify-between gap-4">
                                    <p class="text-sm font-bold">Average accuracy</p>
                                    <p class="font-mono font-semibold text-lg text-ink tnum">{{ $avgAccuracy }}%</p>
                                </div>
                                <div class="mt-2 h-2 rounded-full bg-paper-deep overflow-hidden" aria-hidden="true">
                                    <div class="h-full rounded-full bg-rung-medium/70" style="width: {{ min(100, $avgAccuracy) }}%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="rung-row">
                            <span class="grade-dot bg-rung-hard shrink-0" aria-hidden="true"></span>
                            <div class="flex items-baseline justify-between gap-4 flex-1">
                                <p class="text-sm font-bold">Best combo</p>
                                <p class="font-mono font-semibold text-lg text-ink tnum">{{ $bestCombo }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ledger p-7 sm:p-8">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-extrabold text-lg">Recent Sessions</h3>
                    <a href="{{ route('sessions.index') }}" class="text-sm font-bold text-pine hover:underline">View all</a>
                </div>
                @if ($recentSessions->isEmpty())
                    <p class="text-sm text-ink-soft py-4">No sessions yet. <a href="{{ route('sessions.create') }}" class="font-bold text-pine underline">Log your first session</a>.</p>
                @else
                    <ul>
                        @foreach ($recentSessions as $s)
                            <li class="rung-row !py-4">
                                <span class="grade-dot shrink-0 bg-rung-{{ $s->difficulty === 'easy' ? 'easy' : ($s->difficulty === 'medium' ? 'medium' : 'hard') }}" aria-hidden="true"></span>
                                <div class="flex-1 min-w-0">
                                    <p class="font-bold truncate">{{ $s->song_title }}</p>
                                    <p class="measure mt-0.5">{{ strtoupper($s->difficulty) }} · {{ strtoupper($s->hand_used) }} HAND</p>
                                </div>
                                <p class="font-mono text-sm text-ink-soft tnum whitespace-nowrap">{{ number_format($s->score) }} PTS · {{ $s->accuracy }}% · {{ $s->played_at->format('M d') }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

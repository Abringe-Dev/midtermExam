@extends('layouts.public')
@section('title', 'About')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
    <p class="measure">ABOUT THE SYSTEM</p>
    <h1 class="display-tight mt-4 font-extrabold text-4xl sm:text-5xl max-w-3xl">About Grip Restore</h1>
    <p class="mt-5 text-lg text-ink-soft max-w-3xl">Grip Restore is a browser-based rhythm game that turns repetitive hand therapy into engaging gameplay for stroke survivors and arthritis patients. Instead of boring repetition counters, patients play along to music using therapeutic hand gestures.</p>

    <div class="mt-10 grid lg:grid-cols-2 gap-6">
        <div class="ledger p-7">
            <p class="measure">SYSTEM OVERVIEW</p>
            <h2 class="font-extrabold text-xl mt-2">What runs the clinic</h2>
            <ul class="mt-4 text-sm text-ink-soft space-y-2.5 list-disc list-inside">
                <li><strong class="text-ink">Frontend:</strong> Blade + Tailwind + MediaPipe Hands (CDN, runs fully in browser — no video leaves the device).</li>
                <li><strong class="text-ink">Backend:</strong> Laravel MVC — routes in <code class="font-mono text-[13px]">web.php</code>, Eloquent models, Blade views, auth middleware.</li>
                <li><strong class="text-ink">Database:</strong> SQLite — <code class="font-mono text-[13px]">users</code> and <code class="font-mono text-[13px]">therapy_sessions</code> tables.</li>
                <li><strong class="text-ink">Auth:</strong> Laravel Breeze — register, login, logout, protected dashboard &amp; sessions.</li>
            </ul>
        </div>
        <div class="ledger p-7">
            <p class="measure">EXAM MAPPING</p>
            <h2 class="font-extrabold text-xl mt-2">MVC, point by point</h2>
            <ul class="mt-4 text-sm text-ink-soft space-y-2.5 list-disc list-inside">
                <li><strong class="text-ink">Models:</strong> <code class="font-mono text-[13px]">User</code>, <code class="font-mono text-[13px]">TherapySession</code> (Eloquent).</li>
                <li><strong class="text-ink">Views:</strong> Blade templates — <code class="font-mono text-[13px]">pages/*</code>, <code class="font-mono text-[13px]">sessions/*</code>, <code class="font-mono text-[13px]">dashboard</code>.</li>
                <li><strong class="text-ink">Controllers:</strong> <code class="font-mono text-[13px]">PageController</code>, <code class="font-mono text-[13px]">DashboardController</code>, <code class="font-mono text-[13px]">TherapySessionController</code>.</li>
                <li><strong class="text-ink">Routes:</strong> defined in <code class="font-mono text-[13px]">routes/web.php</code>, CRUD via <code class="font-mono text-[13px]">Route::resource</code>.</li>
            </ul>
        </div>
    </div>

    <div class="mt-6 ledger p-7">
        <div class="flex flex-wrap items-baseline justify-between gap-2">
            <h2 class="font-extrabold text-xl">Gesture Detection (21 landmarks)</h2>
            <p class="measure">MEDIAPIPE HANDS · THREE GRADES</p>
        </div>
        <div class="mt-5">
            <div class="rung-row">
                <span class="grade-dot bg-rung-easy shrink-0" aria-hidden="true"></span>
                <div class="text-sm text-ink-soft"><strong class="text-ink">Pinch:</strong> distance between thumb tip (4) and index tip (8) &lt; threshold relative to wrist (0) to middle MCP (9) scale.</div>
            </div>
            <div class="rung-row">
                <span class="grade-dot bg-rung-medium shrink-0" aria-hidden="true"></span>
                <div class="text-sm text-ink-soft"><strong class="text-ink">Fist:</strong> all four fingertip-to-wrist distances small (tips 8, 12, 16, 20 folded).</div>
            </div>
            <div class="rung-row">
                <span class="grade-dot bg-rung-hard shrink-0" aria-hidden="true"></span>
                <div class="text-sm text-ink-soft"><strong class="text-ink">Open palm:</strong> all four fingertips extended far from wrist + thumb abducted.</div>
            </div>
        </div>
        <p class="mt-5 text-sm text-ink-soft"><strong class="text-ink">Scoring:</strong> Perfect / Good / Miss based on timing window (±120ms / ±250ms), combo multiplier, accuracy = hits / total × 100.</p>
    </div>
</div>
@endsection

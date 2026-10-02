@extends('layouts.public')
@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-8">
    <div class="grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7">
            <p class="measure">STROKE AND ARTHRITIS HAND THERAPY</p>
            <h1 class="display-tight mt-4 font-extrabold text-ink text-5xl sm:text-6xl leading-[1.02]">Therapy,<br>kept in time.</h1>
            <p class="mt-5 text-lg text-ink-soft max-w-xl">Turn stroke &amp; arthritis hand therapy into a rhythm game.</p>
            <p class="mt-2 text-ink-soft max-w-xl">Webcam hand tracking (MediaPipe Hands) detects pinch, fist, and open palm on the beat.</p>
            <p class="measure mt-6">TEMPO 60&ndash;120 BPM &nbsp;·&nbsp; TRACKING STAYS ON YOUR DEVICE</p>
            <div class="mt-6 flex flex-wrap gap-3">
                @auth
                    <a href="{{ route('sessions.index') }}" class="btn-care">View My Sessions</a>
                    <a href="{{ route('dashboard') }}" class="btn-quiet">Dashboard</a>
                @else
                    <a href="{{ route('register') }}" class="btn-care">Start Therapy — Sign Up</a>
                    <a href="{{ route('about') }}" class="btn-quiet">How It Works</a>
                @endauth
            </div>
        </div>
        <div class="lg:col-span-5">
            <div class="ledger p-6 sm:p-7">
                <div class="flex items-center justify-between">
                    <p class="measure">RESISTANCE LADDER · THREE THERAPY GRADES</p>
                    <div class="rung-meter flex items-end gap-1" aria-hidden="true">
                        <span class="block w-1.5 h-6 rounded-full bg-pine"></span>
                        <span class="block w-1.5 h-6 rounded-full bg-pine"></span>
                        <span class="block w-1.5 h-6 rounded-full bg-pine"></span>
                        <span class="block w-1.5 h-6 rounded-full bg-pine"></span>
                        <span class="block w-1.5 h-6 rounded-full bg-pine"></span>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="rung-row">
                        <span class="grade-dot bg-rung-easy shrink-0" aria-hidden="true"></span>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="shrink-0" aria-hidden="true">
                            <path d="M8 30L17 13M32 30L23 13" stroke="#0E5F56" stroke-width="2.5" stroke-linecap="round"/>
                            <circle cx="17" cy="11" r="3" fill="#0E5F56"/>
                            <circle cx="23" cy="11" r="3" fill="#0E5F56"/>
                        </svg>
                        <div>
                            <h3 class="font-extrabold text-lg leading-tight">Pinch</h3>
                            <p class="text-sm text-ink-soft mt-0.5">Thumb to index finger. Improves fine motor control.</p>
                            <p class="measure mt-1">LANDMARKS 4–8 DISTANCE</p>
                        </div>
                    </div>
                    <div class="rung-row">
                        <span class="grade-dot bg-rung-medium shrink-0" aria-hidden="true"></span>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="shrink-0" aria-hidden="true">
                            <rect x="9" y="9" width="22" height="22" rx="7" stroke="#0E5F56" stroke-width="2.5"/>
                            <path d="M14 18h12M14 23h12M14 28h7" stroke="#0E5F56" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                        <div>
                            <h3 class="font-extrabold text-lg leading-tight">Fist</h3>
                            <p class="text-sm text-ink-soft mt-0.5">Full grip closure. Builds strength.</p>
                            <p class="measure mt-1">TIPS 8 · 12 · 16 · 20 FOLDED</p>
                        </div>
                    </div>
                    <div class="rung-row">
                        <span class="grade-dot bg-rung-hard shrink-0" aria-hidden="true"></span>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" class="shrink-0" aria-hidden="true">
                            <path d="M12 31V14M18 31V8M24 31V8M30 31V14" stroke="#0E5F56" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M10 31h22" stroke="#0E5F56" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                        <div>
                            <h3 class="font-extrabold text-lg leading-tight">Open Palm</h3>
                            <p class="text-sm text-ink-soft mt-0.5">Finger extension &amp; stretch. Improves range of motion.</p>
                            <p class="measure mt-1">ALL FINGERS EXTENDED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="ledger px-6 sm:px-8 py-5 flex flex-col md:flex-row md:items-center gap-4 md:gap-0 md:divide-x md:divide-rule text-sm">
        <p class="md:pr-8 text-ink-soft"><strong class="text-ink">On-device tracking.</strong> Hand landmarks are tracked in-browser — no video leaves the device.</p>
        <p class="md:px-8 text-ink-soft"><strong class="text-ink">Scored on timing.</strong> Perfect, Good and Miss windows keep every rep honest.</p>
        <p class="md:pl-8 text-ink-soft"><strong class="text-ink">Every rep recorded.</strong> Score, combo and accuracy land in your therapy history.</p>
    </div>

    <div class="mt-10 grid lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5">
            <h2 class="display-tight font-extrabold text-3xl">How a session works</h2>
            <p class="mt-3 text-ink-soft">Four steps, one steady beat. The sequence is the therapy.</p>
            @guest
                <a href="{{ route('register') }}" class="btn-care mt-6">Create free account</a>
            @endguest
        </div>
        <ol class="lg:col-span-7 ledger px-6 sm:px-8 py-2">
            <li class="rung-row"><span class="font-mono font-semibold text-pine text-sm w-8 shrink-0">01</span><p class="text-ink-soft text-sm"><strong class="text-ink">Pick a song &amp; difficulty</strong> (60–120 BPM).</p></li>
            <li class="rung-row"><span class="font-mono font-semibold text-pine text-sm w-8 shrink-0">02</span><p class="text-ink-soft text-sm"><strong class="text-ink">Allow webcam access</strong> — hand landmarks tracked in-browser.</p></li>
            <li class="rung-row"><span class="font-mono font-semibold text-pine text-sm w-8 shrink-0">03</span><p class="text-ink-soft text-sm"><strong class="text-ink">Match the gesture prompts</strong> falling on the rhythm highway.</p></li>
            <li class="rung-row"><span class="font-mono font-semibold text-pine text-sm w-8 shrink-0">04</span><p class="text-ink-soft text-sm"><strong class="text-ink">Score, combo &amp; accuracy</strong> are saved to your therapy history.</p></li>
        </ol>
    </div>
</div>
@endsection

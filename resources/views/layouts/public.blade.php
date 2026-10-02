<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Grip Restore') }} - @yield('title', 'Hand Therapy Rhythm Game')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=public-sans:400,500,600,700,800|jetbrains-mono:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-paper text-ink">
    <!-- THESIS: Therapy you can trust, rhythm you can feel; owns the resistance ladder and refuses the gradient-hero-plus-three-cards template and the neon arcade. OWN-WORLD: warm chart-paper, committed pine teal, putty-grade rung hues, monumental Public Sans against tiny JetBrains Mono measurements, hairline rules and grade chips. STORY: visitor grasps therapy-as-rhythm in one viewport, believes on-device tracking plus a real session ledger, acts by signing up or logging a session. FIRST VIEWPORT: headline, tempo readout and primary action beside a vertical resistance rail pinning three flat gesture plates, marker ticking. FORM: grounded candidate 4 of 7, seed 4f27d48f. FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, DESIGN.md, and every shipping raster carrying its provenance -->
    <div class="h-1.5 w-full bg-pine" aria-hidden="true"></div>
    <nav class="bg-paper/95 backdrop-blur border-b border-rule">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center gap-9">
                    <a href="{{ route('home') }}" class="flex items-center gap-2.5 font-extrabold text-lg tracking-tight text-ink">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true">
                            <rect x="1.5" y="1.5" width="23" height="23" rx="7" stroke="#0E5F56" stroke-width="2"/>
                            <path d="M6 15.5h3.2l1.6-4.5 2.4 8 1.8-5.4 1.2 1.9H20" stroke="#0E5F56" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Grip Restore
                    </a>
                    <div class="hidden md:flex items-center gap-7 text-sm font-semibold">
                        <a href="{{ route('home') }}" class="text-ink-soft hover:text-pine">Home</a>
                        <a href="{{ route('about') }}" class="text-ink-soft hover:text-pine">About</a>
                        <a href="{{ route('contact') }}" class="text-ink-soft hover:text-pine">Contact</a>
                        @auth
                            <a href="{{ route('sessions.index') }}" class="text-ink-soft hover:text-pine">My Sessions</a>
                        @endauth
                    </div>
                </div>
                <div class="flex items-center gap-5">
                    @auth
                        <span class="measure hidden sm:inline">SIGNED IN</span>
                        <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-ink-soft hover:text-pine px-2 py-2.5">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-sm font-semibold text-rung-hard hover:underline px-2 py-2.5">Log Out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-ink-soft hover:text-pine px-2 py-2.5">Log in</a>
                        <a href="{{ route('register') }}" class="btn-care !px-5 !py-2.5">Sign Up</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-rule mt-16">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-sm font-bold text-ink">Grip Restore</p>
            <p class="measure">HAND THERAPY THROUGH RHYTHM · ITCC3101 MIDTERM</p>
        </div>
    </footer>
</body>
</html>

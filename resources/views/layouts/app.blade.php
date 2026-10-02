<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Grip Restore') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=public-sans:400,500,600,700,800|jetbrains-mono:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- THESIS: Therapy you can trust, rhythm you can feel; owns the resistance ladder and refuses the gradient-hero-plus-three-cards template and the neon arcade. OWN-WORLD: warm chart-paper, committed pine teal, putty-grade rung hues, monumental Public Sans against tiny JetBrains Mono measurements, hairline rules and grade chips. STORY: patient reads progress at a glance in a ruled ledger and logs the next session without friction. FIRST VIEWPORT: app header with grade-mark wordmark, then a ruled ledger of totals, bands and recent sessions. FORM: grounded candidate 4 of 7, seed 4f27d48f. FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, DESIGN.md, and every shipping raster carrying its provenance -->
        <div class="min-h-screen bg-paper text-ink">
            <div class="h-1.5 w-full bg-pine" aria-hidden="true"></div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-paper border-b border-rule">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

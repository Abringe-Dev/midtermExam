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
    <body class="font-sans text-ink antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-paper">
            <div class="h-1.5 w-full bg-pine fixed top-0 left-0" aria-hidden="true"></div>
            <div>
                <a href="/" class="flex items-center gap-2.5 font-extrabold text-xl tracking-tight text-ink">
                    <svg width="30" height="30" viewBox="0 0 26 26" fill="none" aria-hidden="true">
                        <rect x="1.5" y="1.5" width="23" height="23" rx="7" stroke="#0E5F56" stroke-width="2"/>
                        <path d="M6 15.5h3.2l1.6-4.5 2.4 8 1.8-5.4 1.2 1.9H20" stroke="#0E5F56" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Grip Restore
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white border border-rule rounded-card overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

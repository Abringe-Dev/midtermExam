# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Users

Primary: stroke survivors and arthritis patients performing prescribed hand-therapy repetitions at home in a desktop browser with a webcam. Many have reduced grip strength and limited range of motion; interactions must be forgiving. Secondary: the ITCC3101 instructor evaluating this midterm build (accounts, CRUD, seed data, auth protection).

## Product Purpose

Grip Restore turns repetitive hand therapy into a rhythm game: patients match pinch, fist, and open-palm gestures to music via in-browser MediaPipe hand tracking, then review scores, combos, and accuracy in a personal therapy history. Success means patients complete more reps more often, with progress legible to them (and their therapist).

## Positioning

A browser-based therapy rhythm game where hand-landmark tracking runs fully on-device (no video leaves the patient) and every attempt is persisted as clinical history in Laravel — gameplay plus an accountable therapy record, not just a repetition counter.

## Operating Context

Patient flow: create account → log in → open dashboard → log/review therapy sessions → track score, max combo, accuracy, hit/miss over time. A gameplay session means picking a song and difficulty (60–120 BPM), granting webcam access, matching falling gesture prompts (pinch = landmarks 4–8 proximity; fist = folded tips 8/12/16/20; open palm = extended fingers), and saving score, combo, accuracy, duration, and hit/miss counts.

## Capabilities and Constraints

Confirmed: Laravel 12 + Breeze auth (register, login, logout, hashed passwords); `auth` middleware protects `/dashboard` and `sessions.*`; routes in `routes/web.php` (`/`, `/about`, `/contact`, dashboard, `Route::resource('sessions')` except `show`); Eloquent models `User`, `TherapySession`; SQLite tables `users`, `therapy_sessions`; 15 seeded sessions across 4 users; Blade + Tailwind (Figtree) views. Redesign constraint: keep every route, copy claim, validation rule, and CRUD behavior identical — visuals only. Open: exact display typeface and accent hue (visual-world decisions, owned by new-work, not product truth).

## Brand Commitments

Name: Grip Restore. Binding constraints volunteered by the owner: no emojis anywhere in the UI; tone is calm and clinical — a tool a therapist would trust with patient data, never arcade-hype. Existing copy claims about gestures, scoring windows, and MVC mapping must not be altered or extended.

## Evidence on Hand

Real app surfaces: `resources/views/layouts/public.blade.php`, `layouts/app.blade.php`, `layouts/navigation.blade.php`, `pages/home|about|contact.blade.php`, `dashboard.blade.php`, `sessions/index|create|edit|_form.blade.php`. Real data model: `database/migrations/2026_10_02_000001_create_therapy_sessions_table.php`, `app/Models/TherapySession.php`, `database/seeders/TherapySessionSeeder.php` (15 records). No photography, testimonials, or clinical trial data on hand — nothing of that kind may be fabricated.

## Product Principles

1. Trust before thrill: clinical credibility outranks game spectacle everywhere.
2. Progress must be legible at a glance: scores, accuracy, and streaks read instantly.
3. Forgiving by default: large targets, plain language, no punishment states.
4. Every rep counts: each gameplay attempt lands in the therapy record.
5. Exam-honest: only working routes and real seeded data are shown.

## Accessibility & Inclusion

Motor-impaired primary users: large click targets, keyboard-operable forms, visible focus, and contrast that holds for older eyes. No known mandated standard beyond that; these needs govern the rebuild.

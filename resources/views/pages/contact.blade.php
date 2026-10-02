@extends('layouts.public')
@section('title', 'Contact')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
    <div class="grid lg:grid-cols-12 gap-10">
        <div class="lg:col-span-5">
            <p class="measure">CONTACT THE CLINIC</p>
            <h1 class="display-tight mt-4 font-extrabold text-4xl sm:text-5xl">Contact</h1>
            <p class="mt-4 text-ink-soft">Questions about Grip Restore therapy sessions? Send us a message.</p>
            <p class="measure mt-6">RESPONSE WITHIN TWO CLINIC DAYS</p>
        </div>
        <div class="lg:col-span-7">
            @if (session('status'))
                <div class="mb-4 bg-pine-wash border border-pine/30 text-pine-deep px-4 py-3 rounded-card text-sm font-semibold">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.send') }}" class="ledger p-6 sm:p-8 space-y-5">
                @csrf
                <div>
                    <x-input-label for="contact-name" value="Name" />
                    <x-text-input id="contact-name" type="text" name="name" value="{{ old('name') }}" class="mt-1 block w-full" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="contact-email" value="Email" />
                    <x-text-input id="contact-email" type="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="contact-message" value="Message" />
                    <textarea id="contact-message" name="message" rows="5" class="mt-1 block w-full border-ink/30 rounded-card shadow-sm focus:border-pine focus:ring-pine" required>{{ old('message') }}</textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
                <x-primary-button>Send Message</x-primary-button>
            </form>
        </div>
    </div>
</div>
@endsection

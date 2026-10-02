<x-app-layout>
    <x-slot name="header">
        <p class="measure">NEW ENTRY</p>
        <h2 class="display-tight font-extrabold text-2xl text-ink leading-tight mt-1">Log Therapy Session</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="ledger p-6 sm:p-8">
                <form method="POST" action="{{ route('sessions.store') }}" class="space-y-5">
                    @csrf
                    @include('sessions._form')
                    <div class="flex items-center gap-4 pt-1">
                        <x-primary-button>Save Session</x-primary-button>
                        <a href="{{ route('sessions.index') }}" class="text-sm font-bold text-ink-soft hover:text-pine hover:underline">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

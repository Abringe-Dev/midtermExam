<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-rung-hard border border-transparent rounded-card font-bold text-sm text-white hover:brightness-110 active:brightness-95 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

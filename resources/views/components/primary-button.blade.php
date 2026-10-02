<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-pine border border-transparent rounded-card font-bold text-sm text-paper hover:bg-pine-deep focus:bg-pine-deep active:bg-pine-deep focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

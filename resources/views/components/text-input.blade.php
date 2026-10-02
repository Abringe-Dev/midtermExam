@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-ink/30 focus:border-pine focus:ring-pine rounded-card shadow-sm']) }}>

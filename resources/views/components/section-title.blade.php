@props(['title', 'subtitle' => null, 'alignment' => 'left', 'theme' => 'dark'])

@php
    $alignClass = match ($alignment) {
        'center' => 'text-center items-center',
        'right' => 'text-right items-end',
        default => 'text-left items-start',
    };

    $titleColor = $theme === 'light' ? 'text-navy' : 'text-white';
    $subtitleColor = $theme === 'light' ? 'text-gray-600' : 'text-gray-400';
@endphp

<div class="flex flex-col {{ $alignClass }} mb-12">
    <h2 class="text-3xl md:text-4xl font-bold tracking-tight {{ $titleColor }} mb-4 relative inline-block group">
        {{ $title }}
        <!-- Subtle Animated Accent Underline -->
        <span
            class="absolute -bottom-2 left-0 w-12 h-1 bg-accent rounded-full transition-all duration-500 group-hover:w-full"></span>
    </h2>

    @if($subtitle)
        <p class="{{ $subtitleColor }} text-lg max-w-2xl leading-relaxed mt-2">
            {{ $subtitle }}
        </p>
    @endif
</div>
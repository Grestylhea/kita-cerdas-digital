@props(['href' => null, 'type' => 'button', 'variant' => 'primary'])

@php
    $baseClasses = "inline-flex items-center justify-center px-6 py-3 border text-base font-medium rounded-md transition-all duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent";

    $variants = [
        'primary' => "border-transparent text-white bg-accent hover:bg-accent/90 hover:shadow-[0_0_20px_rgba(56,182,255,0.4)] hover:-translate-y-0.5",
        'secondary' => "border-gray-500 text-gray-200 bg-slate hover:bg-gray-800 hover:text-white hover:border-gray-400 hover:-translate-y-0.5",
        'outline' => "border-accent text-accent bg-transparent hover:bg-accent hover:text-navy hover:-translate-y-0.5",
    ];

    $classes = $baseClasses . ' ' . ($variants[(string) $variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
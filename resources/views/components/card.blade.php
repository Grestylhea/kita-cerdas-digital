@props(['icon' => null, 'title', 'description', 'hoverEffect' => true, 'theme' => 'dark'])

@php
    $bgClass = $theme === 'light' ? 'bg-white border-gray-100' : 'bg-slate border-gray-soft/5';
    $titleColor = $theme === 'light' ? 'text-navy' : 'text-white';
    $descColor = $theme === 'light' ? 'text-gray-600' : 'text-gray-400';
    $shadowHover = $theme === 'light' ? 'hover:shadow-[0_10px_30px_rgba(0,0,0,0.05)]' : 'hover:shadow-[0_10px_30px_rgba(15,23,42,0.8)]';
@endphp

<div
    class="{{ $bgClass }} rounded-xl p-8 border {{ $hoverEffect ? 'transition-all duration-500 hover:-translate-y-2 ' . $shadowHover . ' hover:border-accent/30 group' : '' }}">

    @if($icon)
        <div
            class="w-14 h-14 rounded-lg bg-navy flex items-center justify-center mb-6 border border-gray-soft/10 {{ $hoverEffect ? 'transition-colors duration-300 group-hover:bg-accent/10 group-hover:border-accent/50' : '' }}">
            <div
                class="{{ $hoverEffect ? 'text-gray-400 group-hover:text-accent transition-colors duration-300' : 'text-accent' }}">
                {!! $icon !!}
            </div>
        </div>
    @endif

    <h3
        class="text-xl font-bold {{ $titleColor }} mb-3 {{ $hoverEffect ? 'transition-colors duration-300 group-hover:text-accent' : '' }}">
        {{ $title }}
    </h3>

    <p class="{{ $descColor }} leading-relaxed">
        {{ $description }}
    </p>

    {{ $slot }}
</div>
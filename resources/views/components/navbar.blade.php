<nav class="bg-navy border-b border-gray-soft/10 sticky top-0 z-50 transition-all duration-300" id="main-navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}"
                    class="text-2xl font-bold text-white tracking-tight flex items-center gap-2 group">
                    <!-- Placeholder Icon / Logo -->
                    <img src="{{ asset('images/logo/logo.png') }}" alt="PT. Kita Cerdas Digital Logo"
                        class="h-10 w-auto transition-transform group-hover:scale-105 duration-300">
                    <span>Kita Cerdas <span class="text-accent">Digital</span></span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}"
                    class="text-gray-300 hover:text-white transition-colors {{ request()->routeIs('home') ? 'text-accent font-medium' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="text-gray-300 hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-accent font-medium' : '' }}">About</a>
                <a href="{{ route('services') }}"
                    class="text-gray-300 hover:text-white transition-colors {{ request()->routeIs('services') ? 'text-accent font-medium' : '' }}">Capabilities</a>
                <a href="{{ route('portfolio') }}"
                    class="text-gray-300 hover:text-white transition-colors {{ request()->routeIs('portfolio') ? 'text-accent font-medium' : '' }}">Portfolio</a>
                <a href="{{ route('contact') }}"
                    class="bg-accent/10 text-accent hover:bg-accent hover:text-navy border border-accent/20 px-5 py-2 rounded-md font-medium transition-all duration-300 hover:shadow-[0_0_15px_rgba(56,182,255,0.3)]">
                    Contact Us
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-gray-300 hover:text-white focus:outline-none"
                    aria-controls="mobile-menu" aria-expanded="false"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden bg-slate border-b border-gray-soft/10" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-accent bg-navy' : 'text-gray-300 hover:text-white hover:bg-navy' }}">Home</a>
            <a href="{{ route('about') }}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-accent bg-navy' : 'text-gray-300 hover:text-white hover:bg-navy' }}">About</a>
            <a href="{{ route('services') }}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('services') ? 'text-accent bg-navy' : 'text-gray-300 hover:text-white hover:bg-navy' }}">Capabilities</a>
            <a href="{{ route('portfolio') }}"
                class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('portfolio') ? 'text-accent bg-navy' : 'text-gray-300 hover:text-white hover:bg-navy' }}">Portfolio</a>
            <a href="{{ route('contact') }}"
                class="block px-3 py-2 mt-4 text-center rounded-md text-base font-medium bg-accent text-navy">Contact
                Us</a>
        </div>
    </div>
</nav>

<script>
    // Add subtle shadow and slightly shrink native on scroll
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('main-navbar');
        if (window.scrollY > 20) {
            nav.classList.add('shadow-lg', 'py-0');
        } else {
            nav.classList.remove('shadow-lg', 'py-0');
        }
    });
</script>
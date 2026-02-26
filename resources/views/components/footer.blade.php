<footer class="bg-slate text-gray-400 py-12 border-t border-gray-soft/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 group mb-6">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" class="h-10 w-auto transition-transform group-hover:scale-105">
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-white tracking-tight leading-none group-hover:text-accent transition-colors">Kita Cerdas</span>
                        <span class="text-[10px] text-accent font-semibold tracking-[0.2em] uppercase leading-none mt-1">Digital</span>
                    </div>
                </a>
                <p class="text-sm leading-relaxed mb-6 max-w-sm">
                    Menghadirkan pengembangan perangkat lunak dan layanan teknologi informasi yang terintegrasi,
                    profesional, dan berorientasi pada hasil nyata bisnis Anda.
                </p>
                <div class="flex space-x-4">
                    <!-- Social Links Placeholders -->
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4 uppercase text-sm tracking-wider">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-accent transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-accent transition-colors">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-accent transition-colors">Capabilities</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-accent transition-colors">Portfolio</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4 uppercase text-sm tracking-wider">Kontak & Legal</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Palimanan, Cirebon<br>Jawa Barat, Indonesia</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <a href="mailto:info@kitacerdasdigital.site"
                            class="hover:text-accent transition-colors">info@kitacerdasdigital.site</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <a href="#" class="hover:text-accent transition-colors">+62 8XX XXXX XXXX</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-gray-soft/10 text-sm md:flex justify-between items-center">
            <p>&copy; {{ date('Y') }} PT. Kita Cerdas Digital. All rights reserved.</p>
            <div class="mt-4 md:mt-0 space-x-4">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
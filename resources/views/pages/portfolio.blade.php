<x-layout>
    <x-slot:title>Portfolio | PT. Kita Cerdas Digital</x-slot:title>

    <!-- Header Section -->
    <section class="relative py-24 bg-navy overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 uppercase tracking-tight">
                Portfolio <span class="text-accent">Terbaik</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Jejak rekam kesuksesan kami dalam membantu berbagai klien bertransformasi secara digital.
            </p>
        </div>
    </section>

    <section class="py-24 bg-gray-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Portfolio 1: ISP ManagerJS -->
                <div data-aos="fade-up" data-aos-delay="0"
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group hover:-translate-y-2">
                    <div class="h-64 bg-slate relative overflow-hidden">
                        <img src="{{ asset('images/portfolio/kitabill-isp.jpg') }}" alt="Sistem Billing ISP"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute top-4 right-4 bg-navy text-white text-xs font-bold px-3 py-1 rounded-md border border-gray-500/30">
                            SASS Web App
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-navy mb-2">Sistem Billing ISP (Kitabill)</h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-3">Aplikasi berbasis SASS modern dan lengkap
                            untuk manajemen pelanggan ISP, penagihan tagihan otomatis, dan pemantauan jaringan.</p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Laravel</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Vue.js</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Inertia.js</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">PostgreSQL</span>
                        </div>

                        <a href="https://kitabill.site" target="_blank"
                            class="text-accent hover:text-navy font-semibold inline-flex items-center text-sm transition-colors cursor-pointer">
                            Kunjungi Website
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Portfolio 2: WaKita Gateway -->
                <div data-aos="fade-up" data-aos-delay="150"
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group hover:-translate-y-2">
                    <div class="h-64 bg-slate relative overflow-hidden">
                        <img src="{{ asset('images/portfolio/wa-gateway.jpg') }}" alt="WaKita Gateway"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute top-4 right-4 bg-navy text-white text-xs font-bold px-3 py-1 rounded-md border border-gray-500/30">
                            API & Integration
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-navy mb-2">WaKita Gateway</h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-3">Infrastruktur pengiriman pesan notifikasi
                            Whatsapp otomatis yang terintegrasi langsung dengan sistem bisnis & Billing.</p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Golang</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">PostgreSQL</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">React</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Nginx</span>
                        </div>

                        <a href="https://wa.kitabill.site" target="_blank"
                            class="text-accent hover:text-navy font-semibold inline-flex items-center text-sm transition-colors cursor-pointer">
                            Kunjungi Website
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Portfolio 3: IT Support & Server -->
                <div data-aos="fade-up" data-aos-delay="300"
                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group hover:-translate-y-2">
                    <div class="h-64 bg-slate relative overflow-hidden">
                        <img src="{{ asset('images/portfolio/server-setup.jpg') }}" alt="Server Setup"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div
                            class="absolute top-4 right-4 bg-navy text-white text-xs font-bold px-3 py-1 rounded-md border border-gray-500/30">
                            IT Infrastructure
                        </div>
                    </div>
                    <div class="p-8 relative">
                        <h3 class="text-2xl font-bold text-navy mb-2">Instalasi Server ACS Lokal</h3>
                        <p class="text-gray-500 text-sm mb-6">Setup dan maintenance jaringan infrastruktur server ACS di
                            lokasi klien (on-premise) untuk manajemen perangkat ONT secara terpusat.</p>

                        <div class="flex gap-2 mb-6">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Linux</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">GenieACS</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Networking</span>
                        </div>

                        <span class="text-navy font-semibold inline-flex items-center text-sm">
                            <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Deployed Successfully
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>
<x-layout>
    <x-slot:title>PT. Kita Cerdas Digital | Solusi Digital Cerdas untuk Transformasi Bisnis</x-slot:title>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center bg-navy overflow-hidden">
        <!-- Premium Tech Background Image with Glassmorphism Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero/tech-background.png') }}" alt="Tech Background"
                class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-navy/60 via-navy/80 to-navy opacity-90"></div>

            <!-- Animated Decorative Blobs for Glassmorphism Feel -->
            <div class="absolute top-1/4 -left-20 w-72 h-72 bg-accent/20 rounded-full blur-[100px] animate-blob"></div>
            <div
                class="absolute bottom-1/4 -right-20 w-80 h-80 bg-accent/10 rounded-full blur-[120px] animate-blob animation-delay-2000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full pt-20">
            <div class="max-w-3xl">
                <div data-aos="fade-down"
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 border border-accent/20 text-accent text-sm font-medium mb-6 relative group overflow-hidden">
                    <span class="relative z-10">B2B IT Solutions & Software Development</span>
                    <div
                        class="absolute inset-0 bg-accent/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out">
                    </div>
                </div>

                <h1 data-aos="fade-up" data-aos-delay="100"
                    class="text-5xl md:text-7xl font-extrabold text-white tracking-tight leading-[1.1] mb-8">
                    Solusi Digital <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-blue-300">Cerdas</span>
                    untuk Transformasi Bisnis Modern.
                </h1>

                <p data-aos="fade-up" data-aos-delay="200"
                    class="text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl">
                    Kami menghadirkan pengembangan perangkat lunak dan layanan teknologi informasi yang terintegrasi,
                    andal, dan berstandar enterprise.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <x-button href="{{ route('contact') }}" variant="primary">Konsultasi Sekarang</x-button>
                    <x-button href="{{ route('services') }}" variant="outline">Pelajari Solusi Kami</x-button>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <x-section-title title="Tentang Kami" subtitle="Mitra Teknologi Terpercaya Anda" theme="light" />
                    <div class="prose prose-lg text-gray-600">
                        <p class="mb-4">
                            <strong>PT. Kita Cerdas Digital</strong> adalah perusahaan teknologi yang berdedikasi untuk
                            membantu transformasi digital bisnis di Indonesia. Misi kami adalah menghadirkan
                            infrastruktur IT dan aplikasi cerdas yang dirancang khusus untuk memenuhi kebutuhan proses
                            bisnis korporat yang kompleks.
                        </p>
                        <p class="mb-6">
                            Didukung oleh tim profesional yang kompeten di bidang rekayasa perangkat lunak dan jaringan,
                            kami memastikan setiap produk dan layanan yang kami berikan berorientasi pada peningkatan
                            efisiensi, keamanan, dan skalabilitas jangka panjang.
                        </p>
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center text-accent font-semibold hover:text-navy transition-colors group">
                            Kenali tim kami lebih dekat
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Premium Corporate Dummy Image -->
                <div data-aos="fade-left" data-aos-delay="200"
                    class="relative rounded-2xl overflow-hidden shadow-2xl group">
                    <div
                        class="absolute inset-0 bg-navy/20 group-hover:bg-transparent transition-colors duration-500 z-10">
                    </div>
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        alt="Corporate Office"
                        class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
            </div>
        </div>
    </section>

    <!-- Core Capabilities Section -->
    <section class="py-24 bg-gray-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-title title="Core Capabilities"
                subtitle="Kompetensi Utama Kami dalam Memberikan Keunggulan Kompetitif" alignment="center"
                theme="light" />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
                <!-- KBLI 62019 Concept -->
                <div data-aos="fade-up" data-aos-delay="0">
                    <x-card title="Pengembangan Perangkat Lunak" theme="light"
                        description="Perancangan dan pengembangan aplikasi kustom, sistem informasi enterprise (ERP, CRM, SASS), hingga integrasi platform mutakhir.">
                        <x-slot:icon>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </x-slot:icon>

                        <ul class="mt-6 space-y-3 text-sm text-gray-600">
                            <li class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Sistem Aplikasi Web & Mobile
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Platform Digital Terintegrasi
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Modernisasi Aplikasi Legacy
                            </li>
                        </ul>
                    </x-card>
                </div>

                <!-- KBLI 62090 Concept -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <x-card title="Layanan Teknologi Informasi" theme="light"
                        description="Implementasi infrastruktur server, instalasi jaringan, konsultasi IT, hingga pemeliharaan sistem skala menengah sampai besar.">
                        <x-slot:icon>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                                </path>
                            </svg>
                        </x-slot:icon>

                        <ul class="mt-6 space-y-3 text-sm text-gray-600">
                            <li class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Setup & Konfigurasi Server (ACS,
                                dll)
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Konsultasi & Audit Infrastruktur
                            </li>
                            <li class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> IT Support & Maintenance
                                Terjadwal
                            </li>
                        </ul>
                    </x-card>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}"
                    class="text-accent hover:text-navy font-semibold inline-flex items-center transition-colors">
                    Lihat detail teknis spesialisasi kami
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Work Process Section (Horizontal Flow) -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-section-title title="Pendekatan Kerja Kami"
                subtitle="Metodologi terstruktur untuk memastikan keberhasilan dan kualitas pada setiap fase proyek."
                alignment="center" theme="light" />

            <div class="mt-20 relative">
                <!-- Connecting Line -->
                <div class="hidden md:block absolute top-[40%] left-0 w-full h-0.5 bg-gray-200 -translate-y-1/2 z-0">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 static z-10">
                    <!-- Step 1 -->
                    <div data-aos="zoom-in" data-aos-delay="0"
                        class="relative bg-white px-6 py-8 rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] border border-gray-100 text-center group hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-navy text-accent rounded-full flex items-center justify-center text-2xl font-bold mb-6 border-4 border-white shadow-md group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            1</div>
                        <h4 class="text-lg font-bold text-navy mb-2">Analisis & Konsultasi</h4>
                        <p class="text-gray-500 text-sm">Pemetaan masalah teknis dan identifikasi kebutuhan bisnis
                            secara presisi.</p>
                    </div>

                    <!-- Step 2 -->
                    <div data-aos="zoom-in" data-aos-delay="100"
                        class="relative bg-white px-6 py-8 rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] border border-gray-100 text-center group hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-navy text-accent rounded-full flex items-center justify-center text-2xl font-bold mb-6 border-4 border-white shadow-md group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            2</div>
                        <h4 class="text-lg font-bold text-navy mb-2">Perancangan Arsitektur</h4>
                        <p class="text-gray-500 text-sm">Pembuatan blueprint sistem, desain UI/UX, dan penyusunan stack
                            teknologi yang tepat.</p>
                    </div>

                    <!-- Step 3 -->
                    <div data-aos="zoom-in" data-aos-delay="200"
                        class="relative bg-white px-6 py-8 rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] border border-gray-100 text-center group hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-navy text-accent rounded-full flex items-center justify-center text-2xl font-bold mb-6 border-4 border-white shadow-md group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            3</div>
                        <h4 class="text-lg font-bold text-navy mb-2">Pengembangan & QA</h4>
                        <p class="text-gray-500 text-sm">Fase coding dengan standar tinggi, diikuti uji kualitas
                            (testing) ketat.</p>
                    </div>

                    <!-- Step 4 -->
                    <div data-aos="zoom-in" data-aos-delay="300"
                        class="relative bg-white px-6 py-8 rounded-xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] border border-gray-100 text-center group hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-navy text-accent rounded-full flex items-center justify-center text-2xl font-bold mb-6 border-4 border-white shadow-md group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            4</div>
                        <h4 class="text-lg font-bold text-navy mb-2">Deploy & Support</h4>
                        <p class="text-gray-500 text-sm">Implementasi ke production environment, pelatihan, dan dukungan
                            teknis berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Legal Compliance -->
    <section class="py-24 bg-slate text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <!-- Why Choose Us -->
                <div class="lg:col-span-7" data-aos="fade-right">
                    <x-section-title title="Mengapa Memilih Kami?"
                        subtitle="Keunggulan kompetitif yang membedakan kami di industri teknologi." />

                    <div class="space-y-8 mt-10">
                        <div class="flex gap-4" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="mt-1 flex-shrink-0 w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center border border-accent/20">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Berbasis Teknologi Modern</h4>
                                <p class="text-gray-400">Kami menggunakan stack terdepan (React, Laravel, Tailwind,
                                    Cloud Server) untuk memastikan kecepatan dan keamanan tinggi.</p>
                            </div>
                        </div>

                        <div class="flex gap-4" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="mt-1 flex-shrink-0 w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center border border-accent/20">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Tim Analis & Teknis Profesional</h4>
                                <p class="text-gray-400">Ditangani langsung oleh tim engineer berpengalaman yang
                                    memahami betul alur bisnis B2B dan standar arsitektur sistem skala besar.</p>
                            </div>
                        </div>

                        <div class="flex gap-4" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="mt-1 flex-shrink-0 w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center border border-accent/20">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-2">Komitmen pada Kualitas & Keamanan</h4>
                                <p class="text-gray-400">Garansi penanganan bug dan protokol keamanan yang ketat demi
                                    menjaga kerahasiaan dan integritas data klien kami.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Legal & Compliance (Trust Signal) -->
                <div class="lg:col-span-5" data-aos="fade-left" data-aos-delay="200">
                    <div
                        class="bg-navy rounded-2xl p-8 border border-gray-soft/10 h-full flex flex-col justify-center relative overflow-hidden group hover:shadow-[0_0_40px_rgba(56,182,255,0.15)] transition-shadow duration-500">
                        <!-- BG accent element -->
                        <div
                            class="absolute -top-24 -right-24 w-48 h-48 bg-accent rounded-full blur-[80px] opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                        </div>

                        <div class="flex items-center gap-3 mb-6 relative z-10">
                            <svg class="w-8 h-8 text-accent transform group-hover:scale-110 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4m-6 8a9 9 0 110-18 9 9 0 010 18z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold">Legal & Compliance</h3>
                        </div>

                        <p class="text-gray-400 mb-8 leading-relaxed relative z-10">
                            PT. Kita Cerdas Digital adalah entitas bisnis resmi berbadan hukum yang beroperasi
                            berdasarkan regulasi hukum positif di Indonesia. Kami menjunjung tinggi kepatuhan
                            operasional untuk menciptakan iklim kerjasama yang aman.
                        </p>

                        <div class="space-y-4 relative z-10">
                            <div
                                class="pb-4 border-b border-gray-soft/10 flex justify-between items-center group/item hover:border-accent/30 transition-colors duration-300">
                                <span
                                    class="block text-sm text-gray-500 group-hover/item:text-gray-300 transition-colors duration-300">Entitas
                                    Badan Hukum</span>
                                <span class="font-semibold text-white tracking-wide text-sm">Perseroan Terbatas
                                    (PT)</span>
                            </div>
                            <div
                                class="pb-4 border-b border-gray-soft/10 flex justify-between items-center group/item hover:border-accent/30 transition-colors duration-300">
                                <span
                                    class="block text-sm text-gray-500 group-hover/item:text-gray-300 transition-colors duration-300">Nomor
                                    Induk Berusaha (NIB)</span>
                                <span
                                    class="font-semibold text-accent tracking-wide text-sm flex items-center gap-1 group-hover/item:scale-105 transition-transform duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Terverifikasi
                                </span>
                            </div>
                            <div class="pt-2 group/item">
                                <span
                                    class="block text-sm text-gray-500 mb-2 group-hover/item:text-gray-300 transition-colors duration-300">Kode
                                    Spesialisasi KBLI Utama</span>
                                <div class="flex gap-2">
                                    <span
                                        class="px-3 py-1 bg-navy rounded border border-accent/30 text-xs text-accent font-medium group-hover/item:bg-accent group-hover/item:text-navy transition-colors duration-300">62019</span>
                                    <span
                                        class="px-3 py-1 bg-navy rounded border border-accent/30 text-xs text-accent font-medium group-hover/item:bg-accent group-hover/item:text-navy transition-colors duration-300 delay-75">62090</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-soft/10 relative z-10">
                            <a href="{{ route('about') }}"
                                class="text-sm font-medium text-accent hover:text-white transition-colors flex items-center group/link">
                                Lihat detail profil administrasi kami
                                <svg class="w-4 h-4 ml-1 transform group-hover/link:translate-x-2 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-accent relative overflow-hidden" data-aos="fade-up">
        <div class="absolute inset-0 bg-white/10"
            style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px; opacity: 0.2">
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold text-navy mb-6 tracking-tight" data-aos="zoom-in"
                data-aos-delay="100">Siap Skalakan Bisnis Anda
                Bersama Kami?</h2>
            <p class="text-xl text-navy/80 mb-10 mx-auto max-w-2xl font-medium" data-aos="zoom-in" data-aos-delay="200">
                Konsultasikan kebutuhan infrastruktur IT dan perangkat lunak Anda bersama tim ahli kami. Kami siap
                memberikan blueprint terbaik.
            </p>
            <div data-aos="zoom-in" data-aos-delay="300">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold rounded-md text-white bg-navy hover:bg-slate transition-all shadow-xl hover:-translate-y-1 hover:shadow-2xl">
                    Jadwalkan Konsultasi Eksklusif
                </a>
            </div>
        </div>
    </section>
</x-layout>
<x-layout>
    <x-slot:title>Tentang Kami | PT. Kita Cerdas Digital</x-slot:title>

    <!-- Page Header -->
    <div class="bg-navy py-20 relative overflow-hidden border-b border-gray-soft/10">
        <div class="absolute inset-0 bg-slate opacity-50"></div>
        <div
            class="absolute top-0 right-0 w-1/3 h-full bg-[radial-gradient(circle_at_center,rgba(56,182,255,0.1)_0,transparent_70%)]">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Kisah & Identitas Kami</h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">Membangun ekosistem digital yang tangguh untuk masa depan
                bisnis Indonesia.</p>
        </div>
    </div>

    <!-- Sejarah Singkat -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-accent/20 rounded-full blur-2xl"></div>
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        alt="Tim Kita Cerdas" class="rounded-2xl shadow-xl relative z-10">
                    <div
                        class="absolute -bottom-6 -right-6 bg-navy text-white p-6 rounded-xl shadow-lg z-20 border border-gray-soft/10">
                        <p class="text-3xl font-bold text-accent mb-1">ID</p>
                        <p class="text-sm font-medium">B2B Technology <br>Partner</p>
                    </div>
                </div>

                <div>
                    <x-section-title title="Sejarah Perusahaan"
                        subtitle="Awal dari komitmen untuk keunggulan teknologi." />
                    <div class="prose prose-lg text-gray-600">
                        <p>
                            Berdiri pada tahun {{ date('Y') }}, <strong>PT. Kita Cerdas Digital</strong> diinisiasi oleh
                            <strong>Ibnu Syuhada</strong> beserta rekan-rekannya yang melihat adanya kebutuhan mendesak
                            akan infrastruktur IT dan perangkat lunak yang andal untuk sektor korporat (B2B).
                        </p>
                        <p>
                            Meskipun terbilang sebuah entitas baru, perusahaan ini lahir dari akumulasi pengalaman
                            panjang puluhan tahun para pendirinya dalam menangani proyek sistem informasi yang kompleks,
                            integrasi jaringan krusial, dan konsultasi IT tingkat enterprise.
                        </p>
                        <p>
                            Saat ini, kami beroperasi di kawasan Palimanan, Cirebon, mengusung dedikasi tinggi untuk
                            memberikan pelayanan dan produk berstandar global bagi seluruh klien kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="py-24 bg-gray-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Visi -->
                <div
                    class="bg-navy p-10 rounded-2xl shadow-xl border border-gray-soft/5 group hover:border-accent/30 transition-colors duration-500">
                    <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Visi Kami</h3>
                    <p class="text-xl text-gray-300 font-medium leading-relaxed">
                        "Menjadi pionir penyedia solusi teknologi cerdas terdepan di Indonesia yang mempercepat
                        transformasi bisnis global."
                    </p>
                </div>

                <!-- Misi -->
                <div
                    class="bg-white p-10 rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] border border-gray-100 group hover:border-accent/30 transition-colors duration-500">
                    <div class="w-14 h-14 bg-navy rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-4">Misi Kami</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Menyediakan produk perangkat lunak berkualitas enterprise yang efisien, aman, dan
                                dapat diskalakan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Memberikan layanan konsultasi dan dukungan IT proaktif dengan standar profesionalitas
                                internasional.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Menjaga integritas operasional tinggi dan membangun kemitraan strategis jangka panjang
                                bersama klien.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi / Tim -->
    <section class="py-24 bg-white border-b border-gray-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-title title="Struktur Manajerial"
                subtitle="Digerakkan oleh individu-individu berdedikasi tinggi di bidang teknologi dan inovasi."
                alignment="center" />

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-16">
                <!-- CEO / Founder -->
                <div
                    class="bg-gray-soft rounded-xl p-8 text-center border border-gray-200/50 hover:shadow-xl transition-shadow duration-300">
                    <div
                        class="w-32 h-32 mx-auto rounded-full bg-slate object-cover overflow-hidden mb-6 border-4 border-white shadow-md relative group">
                        <!-- Profile Pic Placeholder -->
                        <img src="https://ui-avatars.com/api/?name=Ibnu+Syuhada&background=0f172a&color=38b6ff&size=150&font-size=0.33"
                            alt="Ibnu Syuhada"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <h3 class="text-xl font-bold text-navy">Ibnu Syuhada</h3>
                    <p class="text-accent font-medium mb-4">Founder & CEO</p>
                    <p class="text-gray-500 text-sm leading-relaxed">Arsitek sistem utama dengan pemahaman mendalam pada
                        infrastruktur server dan pengembangan software berskala korporat.</p>
                </div>

                <!-- Co-Founder -->
                <div
                    class="bg-gray-soft rounded-xl p-8 text-center border border-gray-200/50 hover:shadow-xl transition-shadow duration-300">
                    <div
                        class="w-32 h-32 mx-auto rounded-full bg-slate object-cover overflow-hidden mb-6 border-4 border-white shadow-md relative group">
                        <!-- Profile Pic Placeholder -->
                        <img src="https://ui-avatars.com/api/?name=Ibnu+Ato%27illah&background=0f172a&color=38b6ff&size=150&font-size=0.33"
                            alt="Ibnu Ato'illah"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <h3 class="text-xl font-bold text-navy">Ibnu Ato'illah</h3>
                    <p class="text-accent font-medium mb-4">Co-Founder</p>
                    <p class="text-gray-500 text-sm leading-relaxed">Penggerak inovasi produk dan manajer proyek yang
                        berfokus pada pengalaman klien dengan integrasi solusi berbasis data.</p>
                </div>

                <!-- Intern -->
                <div
                    class="bg-gray-soft rounded-xl p-8 text-center border border-gray-200/50 hover:shadow-xl transition-shadow duration-300">
                    <div
                        class="w-32 h-32 mx-auto rounded-full bg-slate object-cover overflow-hidden mb-6 border-4 border-white shadow-md relative group">
                        <!-- Profile Pic Placeholder -->
                        <img src="https://ui-avatars.com/api/?name=Ino&background=0f172a&color=38b6ff&size=150&font-size=0.33"
                            alt="Ino"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <h3 class="text-xl font-bold text-navy">Ino</h3>
                    <p class="text-accent font-medium mb-4">Asisten Eksekutif / Junior Engineer</p>
                    <p class="text-gray-500 text-sm leading-relaxed">Talenta muda enerjik yang mendukung berbagai
                        kegiatan operasional, troubleshooting jaringan, dan deployment dasar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Legalitas & Status Badan Hukum -->
    <section class="py-24 bg-slate text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <x-section-title title="Informasi Legal & Kepatuhan"
                subtitle="Integritas dan transparansi adalah fondasi operasional kami dalam memberikan keamanan berbisnis bagi Anda."
                alignment="center" />

            <div
                class="bg-navy rounded-2xl border border-gray-soft/10 p-8 md:p-12 mt-12 text-left shadow-2xl relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-full blur-[40px] translate-x-1/2 -translate-y-1/2">
                </div>

                <h3 class="text-2xl font-bold mb-8 border-b border-gray-soft/10 pb-4">Profil Legal Perusahaan</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-x-12">
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Nama Entitas</p>
                        <p class="text-lg font-semibold tracking-wide">PT. Kita Cerdas Digital</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-1">Status Badan Hukum</p>
                        <p class="text-lg font-semibold tracking-wide flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                            Perseroan Terbatas Resmi
                        </p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-400 mb-3">Kegiatan Usaha Utama (KBLI)</p>
                        <div class="space-y-4">
                            <div class="bg-slate p-4 rounded-lg border border-gray-soft/5">
                                <div class="flex items-start justify-between">
                                    <div class="pr-4">
                                        <p class="font-bold text-white mb-1">62019 - Aktivitas Pemrograman Komputer
                                            Lainnya</p>
                                        <p class="text-sm text-gray-400">Penyediaan jasa perancangan dan pembuatan
                                            perangkat lunak skala enterprise (komersial), instalasi software, hingga
                                            implementasi kustom.</p>
                                    </div>
                                    <div class="text-accent shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate p-4 rounded-lg border border-gray-soft/5">
                                <div class="flex items-start justify-between">
                                    <div class="pr-4">
                                        <p class="font-bold text-white mb-1">62090 - Aktivitas Teknologi Informasi dan
                                            Jasa Komputer Lainnya</p>
                                        <p class="text-sm text-gray-400">Audit sistem, integrasi hardware/software,
                                            recovery dari bencana sistem (disaster recovery), dan jasa perawatan TI.</p>
                                    </div>
                                    <div class="text-accent shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
<x-layout>
    <x-slot:title>Terms of Service | PT. Kita Cerdas Digital</x-slot:title>

    <!-- Header Section -->
    <section class="relative py-24 bg-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 right-0 w-96 h-96 bg-accent rounded-full blur-[120px] -mr-48 -mt-24"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 uppercase tracking-tight">
                Syarat & <span class="text-accent">Ketentuan</span>
            </h1>
            <p class="text-lg text-gray-300">
                Terakhir Diperbarui: {{ date('d M Y') }}
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-12 text-gray-600 leading-relaxed text-lg">

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">1. Kesepakatan Umum</h3>
                    <p>
                        Dengan mengakses situs web ini dan/atau menggunakan layanan teknologi (Pembuatan Perangkat Lunak
                        - KBLI 62019, Audit & Konsultasi Jaringan/Hardware - KBLI 62090) dari PT. Kita Cerdas Digital,
                        Anda ("Klien") setuju untuk terikat secara sah dengan Syarat dan Ketentuan berikut, semua hukum
                        operasional, serta peraturan keamanan Sistem Informasi terkait yang berlaku.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">2. Deskripsi Layanan
                        Kemitraan</h3>
                    <p>
                        PT. Kita Cerdas Digital bertindak sebagai mitra teknologi yang menyediakan layanan perancangan
                        pengembangan sistem (Web Apps, Mobile Apps, Desktop), layanan migrasi arsitektur server,
                        integrasi jaringan, serta IT Support & Maintenance berskala komersial (Enterprise B2B).
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">3. Batasan Tanggung
                        Jawab Operasional</h3>
                    <p>
                        Meskipun kami membangun infrastruktur yang tangguh, PT. Kita Cerdas Digital tidak bertanggung
                        jawab secara komersial atas kerugian bisnis, gangguan layanan (downtime), atau hilangnya data
                        yang diakibatkan oleh Force Majeure, penyedia pihak ketiga (cloud hosting providers terpisah
                        yang bukan di bawah manajemen langsung (SLA) kami), maupun kesalahan fatal prosedur internal
                        Klien (human-error di pihak pengguna).
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">4. Hak Kekayaan
                        Intelektual (HAKI)</h3>
                    <p>Kecuali ada perjanjian kontrak terpisah:</p>
                    <ul class="list-disc md:list-inside mt-4 space-y-2 ml-4 md:ml-0">
                        <li>Aset kode sumber (Source Code), hak desain UI/UX, database inti, dan algoritma yang
                            dikembangkan <em>specifically</em> sebagai pesanan <strong>Layanan Kustom</strong>
                            (Dedicated Development) akan diserahkan sepenuhnya secara komersial kepada instansi Klien
                            pasca serah terima 100%.</li>
                        <li>Sistem platform berbentuk SASS (Software as a Service) atau produk turunan massal mutlak
                            milik PT. Kita Cerdas Digital.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">5. Kerahasiaan
                        Perusahaan (NDA)</h3>
                    <p>
                        Masing-masing pihak setuju untuk menahan semua informasi yang diklasifikasikan sebagai "Rahasia
                        Bisnis" perusahaan secara mutlak. Kami tidak berhak mempublikasikan arsitektur data Klien maupun
                        kunci lisensi enkripsi yang disiapkan untuk mengantisipasi keamanan Cyber perusahaan pihak
                        Klien.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">6. Revisi Kontrak dan
                        Kesalahan</h3>
                    <p>
                        Material spesifikasi requirement IT yang muncul tidak masuk dalam Kontrak Kesepakatan Awal akan
                        dikenai biaya Service Charge tersendiri. Kami mungkin memperbarui bahan teknis penawaran atau
                        portofolio layanan pada situs web sewaktu-waktu tanpa pemberitahuan prioritas wajib masa lampau.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">7. Hukum yang Berlaku
                    </h3>
                    <p>
                        Setiap sengketa yang berkaitan dengan operasi IT atau penggunaan layanan situs PT. Kita Cerdas
                        Digital akan mematuhi Hukum Republik Indonesia — secara spesifik ditekankan pada ketetapan
                        Kementerian Komunikasi dan Informatika serta peraturan siber operasional setempat di yurisdiksi
                        domisili kantor Cirebon, Jawa Barat.
                    </p>
                </div>

            </div>
        </div>
    </section>
</x-layout>
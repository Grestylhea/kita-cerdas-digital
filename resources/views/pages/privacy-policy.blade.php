<x-layout>
    <x-slot:title>Kebijakan Privasi | PT. Kita Cerdas Digital</x-slot:title>

    <!-- Header Section -->
    <section class="relative py-24 bg-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-96 h-96 bg-accent rounded-full blur-[120px] -ml-48 -mt-24"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 uppercase tracking-tight">
                Kebijakan <span class="text-accent">Privasi</span>
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
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">1. Pendahuluan</h3>
                    <p>
                        PT. Kita Cerdas Digital ("Kami") berkomitmen tinggi untuk melindungi privasi dan keamanan data
                        klien serta pengunjung situs web kami. Kebijakan Privasi ini menjelaskan bagaimana kami
                        mengumpulkan, menggunakan, menyimpan, dan melindungi informasi pribadi Anda saat menggunakan
                        layanan teknologi, sistem perangkat lunak, dan infrastruktur IT kami.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">2. Pengumpulan Data
                        Informasi</h3>
                    <p>Kami dapat mengumpulkan informasi identitas pribadi dengan berbagai cara, termasuk namun tidak
                        terbatas pada, ketika Pengguna mengunjungi situs kami, mengisi formulir konsultasi B2B, dan
                        sehubungan dengan aktivitas, layanan, fitur, atau sumber daya lain yang kami sediakan. Informasi
                        ini dapat mencakup:</p>
                    <ul class="list-disc md:list-inside mt-4 space-y-2 ml-4 md:ml-0">
                        <li>Nama lengkap dan jabatan (untuk perwakilan instansi/perusahaan).</li>
                        <li>Informasi kontak seperti alamat email, nomor telepon, atau WhatsApp aktif.</li>
                        <li>Detail operasional terkait kebutuhan pengembangan software atau infrastruktur server yang
                            diisi pada formulir permintaan layanan.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">3. Penggunaan Informasi
                        Pribadi</h3>
                    <p>PT. Kita Cerdas Digital mengumpulkan dan menggunakan informasi pribadi Anda untuk tujuan-tujuan
                        berikut:</p>
                    <ul class="list-disc md:list-inside mt-4 space-y-2 ml-4 md:ml-0">
                        <li><strong>Meningkatkan Layanan Klien:</strong> Informasi yang Anda berikan membantu kami
                            merespons permintaan konsultasi teknologi dan kebutuhan dukungan IT secara lebih efisien.
                        </li>
                        <li><strong>Personalisasi Solusi Sistem:</strong> Menyesuaikan arsitektur perangkat lunak atau
                            rekomendasi server sesuai dengan kapasitas dan visi perusahaan Anda.</li>
                        <li><strong>Komunikasi Berkala:</strong> Untuk mengirimkan informasi terkait proyek, pembaruan
                            keamanan server, proses maintenance, atau tanggapan atas pertanyaan Anda.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">4. Keamanan Data Level
                        Enterprise</h3>
                    <p>
                        Kami senantiasa menerapkan praktik pengumpulan, penyimpanan, dan pemrosesan data yang mutakhir
                        serta langkah-langkah keamanan digital berlapis (enkripsi, firewall standar industri) guna
                        melindungi akses, pengubahan, pengungkapan, atau penghancuran tanpa izin atas informasi pribadi
                        dan data transaksi log bisnis Anda yang tersimpan di server kami.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">5. Membagikan Informasi
                        Terkait</h3>
                    <p>
                        Kami sangat menghargai kerahasiaan bisnis Anda (Non-Disclosure Agreement standar terpenuhi).
                        Kami <strong>tidak</strong> menjual, memperdagangkan, atau menyewakan informasi identifikasi
                        instansi Anda kepada pihak mana pun untuk tujuan komersial di luar ruang lingkup kemitraan IT
                        antara Anda dan PT. Kita Cerdas Digital.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-navy mb-4 border-b border-gray-200 pb-2">6. Perubahan Kebijakan
                        Privasi</h3>
                    <p>
                        PT. Kita Cerdas Digital memiliki keleluasaan untuk memperbarui Kebijakan Privasi ini kapan saja,
                        bergantung pada regulasi keamanan data B2B dan kebijakan hukum di Indonesia (kompatibel penuh
                        dengan instrumen KBLI terkait IT dan pengembangan aplikasi). Kami mendorong Klien untuk sering
                        memeriksa halaman ini.
                    </p>
                </div>

                <div class="bg-gray-soft p-8 rounded-xl border border-gray-200 mt-12">
                    <h3 class="text-xl font-bold text-navy mb-3">Persetujuan Anda</h3>
                    <p class="text-base text-gray-500">
                        Dengan menggunakan situs dan layanan keagenan IT PT. Kita Cerdas Digital, Anda menandakan
                        penerimaan Anda terhadap kebijakan ini. Jika Anda memiliki pertanyaan tentang Ketentuan Layanan
                        Privasi kami, harap menghubungi admin teknis kami di <strong><a
                                href="mailto:admin@kitacerdasdigital.site"
                                class="text-accent underline">admin@kitacerdasdigital.site</a></strong>.
                    </p>
                </div>

            </div>
        </div>
    </section>
</x-layout>
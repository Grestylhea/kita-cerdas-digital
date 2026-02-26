<x-layout>
    <x-slot:title>Contact Us | PT. Kita Cerdas Digital</x-slot:title>

    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Abstract gradient blob -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent opacity-5 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-section-title title="Hubungi Kami"
                subtitle="Sampaikan keluhan sistem, ide aplikasi, atau kebutuhan infrastruktur IT perusahaan Anda. Tim kami siap merespons secara profesional."
                theme="light" />

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mt-16">
                <!-- Info Kontak Kiri -->
                <div class="lg:col-span-5 h-full">
                    <div
                        class="bg-navy text-white p-8 rounded-2xl shadow-xl relative overflow-hidden border border-gray-100 h-full flex flex-col justify-center">
                        <div class="absolute -right-16 -top-16 w-48 h-48 bg-accent/20 rounded-full blur-2xl"></div>
                        <h3 class="text-2xl font-bold mb-6 relative z-10">Head Office</h3>

                        <div class="space-y-6 relative z-10">
                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 w-10 h-10 bg-slate rounded-lg flex items-center justify-center shrink-0 border border-gray-600">
                                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold mb-1">Alamat Operasional</p>
                                    <p class="text-gray-400 text-sm leading-relaxed">Kec. Palimanan, Kab.
                                        Cirebon<br>Jawa Barat, Indonesia</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 w-10 h-10 bg-slate rounded-lg flex items-center justify-center shrink-0 border border-gray-600">
                                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold mb-1">WhatsApp Business</p>
                                    <a href="https://wa.me/6282317113029"
                                        class="text-gray-400 text-sm hover:text-accent transition-colors">+62
                                        823-1711-3029</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 w-10 h-10 bg-slate rounded-lg flex items-center justify-center shrink-0 border border-gray-600">
                                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold mb-1">Email Kemitraan</p>
                                    <a href="mailto:admin@kitacerdasdigital.site"
                                        class="text-accent text-sm hover:text-white transition-colors">admin@kitacerdasdigital.site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kontak Kanan -->
                <div class="lg:col-span-7">
                    <div class="bg-gray-soft rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-navy mb-8">Kirimkan Pesan Langsung</h3>

                        <form id="contactForm" class="space-y-6" onsubmit="sendToWhatsApp(event)">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-navy mb-2">Nama Lengkap /
                                        Instansi</label>
                                    <input type="text" id="name" name="name"
                                        class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-shadow"
                                        placeholder="Cth: PT. Bintang Jaya">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-navy mb-2">Alamat
                                        Email</label>
                                    <input type="email" id="email" name="email"
                                        class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-shadow"
                                        placeholder="email@perusahaan.com">
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-navy mb-2">Keperluan /
                                    Kategori</label>
                                <select id="subject" name="subject"
                                    class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-shadow">
                                    <option>Pembuatan Software / Aplikasi Web</option>
                                    <option>Setup & Instalasi Infrastruktur Server</option>
                                    <option>IT Maintenance Support</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-navy mb-2">Detail
                                    Kebutuhan</label>
                                <textarea id="message" name="message" rows="5"
                                    class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-shadow"
                                    placeholder="Jelaskan secara singkat masalah teknologi yang ingin Anda selesaikan..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-navy text-white rounded-lg px-6 py-4 font-bold hover:bg-slate transition-colors hover:shadow-lg">
                                Kirim Permintaan Konsultasi
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function sendToWhatsApp(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (!name || !message) {
                alert("Harap isi Nama dan Detail Kebutuhan Anda.");
                return;
            }

            const waNumber = '6282317113029';
            const waText = `Halo PT. Kita Cerdas Digital,%0A%0ASaya ingin berkonsultasi mengenai layanan Anda.%0A%0A*Nama/Instansi:* ${name}%0A*Email:* ${email}%0A*Keperluan:* ${subject}%0A*Pesan:*%0A${message}`;

            window.open(`https://wa.me/${waNumber}?text=${waText}`, '_blank');
        }
    </script>
</x-layout>
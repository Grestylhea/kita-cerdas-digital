<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PT. Kita Cerdas Digital | Solusi IT & Software Enterprise' }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="PT. Kita Cerdas Digital adalah mitra teknologi B2B terpercaya yang menyediakan layanan pengembangan perangkat lunak (KBLI 62019) dan infrastruktur IT (KBLI 62090).">
    <meta name="keywords"
        content="Software House Cirebon, IT Consultant B2B, Pembuatan Web App, Instalasi Server, PT Kita Cerdas Digital">
    <meta name="author" content="PT. Kita Cerdas Digital">
    <meta property="og:title" content="{{ $title ?? 'PT. Kita Cerdas Digital | Solusi IT' }}">
    <meta property="og:description" content="Mitra teknologi B2B terpercaya yang menyediakan solusi IT cerdas.">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Vite for Tailwind & App JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Custom Native CSS for smooth micro-interactions that go beyond Tailwind defaults */
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-gray-soft);
            color: var(--color-navy);
        }

        ::selection {
            background-color: var(--color-accent);
            color: #ffffff;
        }

        /* AOS Custom Easing Override for more elegant corporate feel */
        [data-aos] {
            transition-timing-function: cubic-bezier(0.25, 1, 0.5, 1) !important;
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden flex flex-col min-h-screen selection:bg-accent selection:text-white">

    <x-navbar />

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Animation Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 800, // Durasi animasi standar
                once: true,    // Hanya animasi sekali saat discroll ke bawah
                offset: 50,    // Offset (px) dari bawah layar sebelum animasi memicu
                easing: 'ease-out-cubic',
            });
        });
    </script>
</body>

</html>
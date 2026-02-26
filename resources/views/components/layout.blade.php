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

        /* Scroll Animation Classes */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden flex flex-col min-h-screen selection:bg-accent selection:text-white">

    <x-navbar />

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Alpine JS for minimal UI state, or Native JS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Custom Scroll Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Apply fade-in-up class to main sections and cards for stagger effect
            const animateElements = document.querySelectorAll('section > div > div, .bg-white.rounded-xl, .bg-navy.rounded-2xl, x-card');

            animateElements.forEach(el => {
                if (!el.classList.contains('absolute') && !el.classList.contains('relative')) {
                    el.classList.add('fade-in-up');
                }
            });

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in-up').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>
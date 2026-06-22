@props(['showFooter' => true, 'transparentNavbar' => false, 'showBackToTop' => true])
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetPartner | Jasa Pembuatan Website & Aplikasi Web Profesional</title>
    <meta name="description" content="NetPartner adalah agensi digital penyedia jasa pembuatan website, aplikasi web enterprise, dan solusi TI terbaik di Jakarta. Tingkatkan bisnis Anda dengan desain UI/UX modern dan teknologi tangguh.">
    <meta name="keywords" content="Jasa pembuatan website, Web Developer Jakarta, Jasa aplikasi web Laravel, Konsultan IT, Jasa UI/UX, Bikin website perusahaan, Software House Indonesia">
    <meta name="author" content="NetPartner">
    
    <!-- Open Graph SEO -->
    <meta property="og:title" content="NetPartner | Jasa Pembuatan Website Profesional">
    <meta property="og:description" content="Mendefinisikan ulang solusi TI dengan mahakarya digital tak tertandingi dan teknologi tangguh untuk bisnis Anda.">
    <meta property="og:type" content="website">
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>
<body class="antialiased font-sans bg-white text-slate-900 overflow-x-hidden"
      x-data="{ 
          isScrolled: false, 
          isMobileMenuOpen: false,
          scrollToTop() {
              window.scrollTo({ top: 0, behavior: 'smooth' });
          }
      }"
      @scroll.window="isScrolled = (window.pageYOffset > 50)">

    <div class="min-h-screen flex flex-col font-sans bg-white text-slate-900">
        
        <!-- Navbar -->
        <nav id="main-navbar" 
             @if(!$transparentNavbar)
             :class="isScrolled ? 'bg-white/80 backdrop-blur-md shadow-sm py-4' : 'bg-transparent py-6'"
             @endif
             class="fixed w-full top-0 z-50 {{ $transparentNavbar ? 'bg-transparent py-6' : '' }}">
            <div class="container mx-auto px-6 max-w-7xl">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-xl shadow-sm bg-indigo-50 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                            <img src="/logo.png" alt="NetPartner Logo" class="relative z-10 w-[75%] h-[75%] object-contain" />
                        </div>
                        <span class="font-bebas text-2xl tracking-[0.2em] text-slate-900 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-indigo-600 group-hover:to-purple-600 transition-all duration-300">NET.PARTNER</span>
                    </a>

                    <!-- Desktop Menu -->
                    <ul class="hidden md:flex items-center justify-center gap-1">
                        @php
                            $navLinks = [
                                ['name' => 'Beranda', 'path' => url('/'), 'active' => request()->is('/')],
                                ['name' => 'Tentang', 'path' => url('/about'), 'active' => request()->is('about')],
                                ['name' => 'Kontak', 'path' => url('/contact'), 'active' => request()->is('contact')],
                            ];
                        @endphp
                        @foreach($navLinks as $link)
                            <li>
                                <a href="{{ $link['path'] }}" 
                                   class="{{ $link['active'] ? 'bg-slate-900 text-white shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }} font-sans text-sm font-medium px-5 py-2 rounded-full transition-all duration-300 uppercase">
                                    {{ $link['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Hamburger Menu -->
                    <button class="md:hidden focus:outline-none text-slate-700 hover:text-slate-900 transition-colors"
                            @click="isMobileMenuOpen = !isMobileMenuOpen">
                        <svg x-show="!isMobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                        <svg x-show="isMobileMenuOpen" style="display: none;" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu Overlay -->
        <div x-show="isMobileMenuOpen" style="display: none;" class="fixed inset-0 z-40 bg-white/95 backdrop-blur-xl pt-32 px-6 md:hidden">
            <ul class="flex flex-col gap-8 text-center">
                @foreach($navLinks as $link)
                    <li>
                        <a href="{{ $link['path'] }}" 
                           class="block font-bebas text-3xl tracking-widest {{ $link['active'] ? 'text-indigo-600' : 'text-slate-700' }} hover:text-indigo-500 transition-colors">
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="{{ url('/contact') }}" class="mt-8 px-8 py-4 w-full block text-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bebas tracking-widest text-xl rounded-full shadow-lg">
                        Mulai Proyek
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        @if($showFooter)
        <!-- Footer -->
        <!-- Unified Minimal Footer -->
        <footer class="w-full relative z-20 py-8 mt-auto bg-[#0B0F19] border-t border-white/5">
            <div class="container mx-auto px-6 max-w-7xl flex flex-col sm:flex-row justify-between items-center text-slate-500 text-sm font-medium tracking-wide">
                <span class="mb-4 sm:mb-0">&copy; {{ date('Y') }} NET.PARTNER STUDIO.</span>
                <div class="flex gap-8">
                    <a href="{{ url('/contact') }}" class="hover:text-purple-400 transition-colors">Kontak Kami</a>
                    <a href="mailto:hello@netpartner.id" class="hover:text-purple-400 transition-colors hidden sm:block">hello@netpartner.id</a>
                </div>
            </div>
        </footer>
        @endif

        @if($showBackToTop)
        <!-- Back to Top -->
        <button
            @click="scrollToTop"
            :class="isScrolled ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10 pointer-events-none'"
            class="fixed bottom-8 right-8 bg-white border border-slate-100 shadow-xl text-indigo-500 p-3 rounded-full transition-all duration-500 hover:bg-slate-50 hover:scale-110 z-40">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
        </button>
        @endif
    </div>

    <!-- Initialize Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            // Navbar hide on scroll down, show on scroll up (Smooth 1:1 Scroll Tracking)
            const navbar = document.getElementById('main-navbar');
            @if(!$transparentNavbar)
            let lastScrollY = window.pageYOffset;
            let currentTranslate = 0; // 0 to -100
            let scrollTimeout;

            // Initial transition for non-transform properties
            navbar.style.transition = 'background-color 0.3s, padding 0.3s, box-shadow 0.3s';

            window.addEventListener('scroll', () => {
                const currentY = window.pageYOffset;
                const delta = currentY - lastScrollY;
                
                // Sensitivity: 0.25 (scroll 400px to fully show/hide) for a relaxed feel
                currentTranslate -= (delta * 0.25); 
                
                // Clamp values between -100% and 0%
                if (currentTranslate < -100) currentTranslate = -100;
                if (currentTranslate > 0) currentTranslate = 0;
                
                // Always show at the very top
                if (currentY <= 50) currentTranslate = 0;
                
                // Remove transform transition while scrolling so it perfectly follows the mouse wheel
                navbar.style.transition = 'background-color 0.3s, padding 0.3s, box-shadow 0.3s';
                navbar.style.transform = `translateY(${currentTranslate}%)`;
                
                lastScrollY = currentY;

                // Snap the navbar to fully open or fully closed when the user stops scrolling
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    // If more than half visible, snap to 0 (open), else snap to -100 (closed)
                    currentTranslate = currentTranslate > -50 ? 0 : -100;
                    if (currentY <= 50) currentTranslate = 0;
                    
                    // Add smooth transform transition for the snapping effect
                    navbar.style.transition = 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), background-color 0.3s, padding 0.3s, box-shadow 0.3s';
                    navbar.style.transform = `translateY(${currentTranslate}%)`;
                }, 150);
                
            }, { passive: true });
            @endif
        });
    </script>
</body>
</html>

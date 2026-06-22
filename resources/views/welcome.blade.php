<x-layout>
    <!-- Hero Section (Light) -->
    <div class="bg-white">
        <x-hero />
    </div>
    


    <!-- Featured Properties (Dark Blue) -->
    <x-featured-properties />

    <!-- Animated Vector Abstract Connection -->
    <style>
        @keyframes moveWave {
            0% { transform: translateX(0) translateZ(0); }
            50% { transform: translateX(-25%) translateZ(0); }
            100% { transform: translateX(-50%) translateZ(0); }
        }
        .wave-line {
            animation: moveWave 15s linear infinite;
        }
        .wave-line:nth-child(2) {
            animation: moveWave 20s linear infinite reverse;
        }
        .wave-line:nth-child(3) {
            animation: moveWave 10s linear infinite;
        }
    </style>
    <div class="w-full overflow-hidden leading-none relative z-20 bg-slate-900 py-4">
        <!-- SVG width is 200% so we can translate it without empty space -->
        <svg class="block w-[200%] h-[60px] md:h-[120px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2880 320" preserveAspectRatio="none">
            <defs>
                <linearGradient id="themeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#ec4899" />   <!-- Pink 500 -->
                    <stop offset="50%" stop-color="#a855f7" />  <!-- Purple 500 -->
                    <stop offset="100%" stop-color="#6366f1" /> <!-- Indigo 500 -->
                </linearGradient>
            </defs>
            <path class="wave-line" fill="none" stroke="url(#themeGradient)" stroke-width="8" opacity="0.3" d="M0,160L48,170.7C96,181,192,203,288,208C384,213,480,203,576,176C672,149,768,107,864,96C960,85,1056,107,1152,122.7C1248,139,1344,149,1392,154.7L1440,160L1488,170.7C1536,181,1632,203,1728,208C1824,213,1920,203,2016,176C2112,149,2208,107,2304,96C2400,85,2496,107,2592,122.7C2688,139,2784,149,2832,154.7L2880,160"></path>
            <path class="wave-line" fill="none" stroke="url(#themeGradient)" stroke-width="6" opacity="0.6" d="M0,256L48,229.3C96,203,192,149,288,149.3C384,149,480,203,576,208C672,213,768,171,864,165.3C960,160,1056,192,1152,202.7C1248,213,1344,203,1392,197.3L1440,192L1488,229.3C1536,203,1632,149,1728,149.3C1824,149,1920,203,2016,208C2112,213,2208,171,2304,165.3C2400,160,2496,192,2592,202.7C2688,213,2784,203,2832,197.3L2880,192"></path>
            <path class="wave-line" fill="none" stroke="url(#themeGradient)" stroke-width="4" opacity="1" d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,192C672,160,768,128,864,138.7C960,149,1056,203,1152,224C1248,245,1344,235,1392,229.3L1440,224L1488,128C1536,160,1632,224,1728,240C1824,256,1920,224,2016,192C2112,160,2208,128,2304,138.7C2400,149,2496,203,2592,224C2688,245,2784,235,2832,229.3L2880,224"></path>
        </svg>
    </div>

    <!-- Portfolio (Dark Slate 950) -->
    <x-property-showcase />

    <!-- Smooth Abstract Layered Wave from Slate-950 to Light Slate-50 (Why Us) -->
    <div class="w-full overflow-hidden leading-none -mb-1 relative z-20 bg-slate-950">
        <svg class="block w-full h-[80px] md:h-[200px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#f8fafc" fill-opacity="0.2" d="M0,192L48,208C96,224,192,256,288,261.3C384,267,480,245,576,213.3C672,181,768,139,864,128C960,117,1056,139,1152,160C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            <path fill="#f8fafc" fill-opacity="0.5" d="M0,64L48,80C96,96,192,128,288,149.3C384,171,480,181,576,165.3C672,149,768,107,864,117.3C960,128,1056,192,1152,218.7C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            <path fill="#f8fafc" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Why Us (Light) -->
    <x-why-us />

    <!-- Fullscreen Dark CTA with Footer -->
    <x-home-cta />
</x-layout>

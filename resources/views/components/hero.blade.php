<section id="home" class="relative w-full h-screen overflow-hidden"
    x-data="{
        showOpening: !sessionStorage.getItem('hasSeenOpening'),
        initGsap(animate = true) {
            if (!animate) {
                this.$refs.title.classList.remove('opacity-0');
                this.$refs.sub.classList.remove('opacity-0');
                Array.from(this.$refs.cards.children).forEach(el => {
                    el.style.transitionDuration = '0ms';
                    el.classList.remove('opacity-0', 'translate-x-8');
                    setTimeout(() => el.style.transitionDuration = '', 50);
                });
                return;
            }

            const tl = gsap.timeline();
            tl.fromTo(this.$refs.title,
                { opacity: 0, y: 50 },
                { opacity: 1, y: 0, duration: 1.5, ease: 'power4.out', delay: 0.5 }
            )
            .fromTo(this.$refs.sub,
                { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 1, ease: 'power3.out' },
                '-=1'
            )
            .fromTo(this.$refs.cards.children,
                { opacity: 0, x: 50 },
                { opacity: 1, x: 0, duration: 1, stagger: 0.2, ease: 'power3.out' },
                '-=0.5'
            );
        },
        playOpening() {
            if (sessionStorage.getItem('hasSeenOpening')) {
                this.showOpening = false;
                this.initGsap(false);
                return;
            }

            const vid = this.$refs.openingVideo;
            if (vid) {
                vid.play().catch(() => this.closeOpening());
            } else {
                this.closeOpening();
            }
        },
        closeOpening() {
            if (this.showOpening) {
                this.showOpening = false;
                sessionStorage.setItem('hasSeenOpening', 'true');
                setTimeout(() => this.initGsap(), 800);
            }
        }
    }"
    x-init="playOpening()">

    <!-- Opening Video Overlay -->
    <div x-show="showOpening"
         x-transition:leave="transition-all ease-in-out duration-[1200ms]"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[9999] bg-black flex flex-col items-center justify-center">
        <video x-ref="openingVideo"
               x-on:ended="closeOpening()"
               x-on:error="closeOpening()"
               muted playsinline
               class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('assets/opening.mp4') }}" type="video/mp4">
        </video>

        <!-- Skip Button -->
        <div class="absolute bottom-8 right-8 md:bottom-12 md:right-12 z-10">
            <button x-on:click="closeOpening()" 
                    class="px-6 py-3 md:px-8 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 text-white/90 hover:text-white font-sans text-xs md:text-sm tracking-[0.2em] uppercase rounded-full transition-all duration-300 shadow-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-white/50 flex items-center gap-2 group">
                Skip Intro
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>
    
    <!-- Container -->
    <div class="relative w-full h-full flex items-center">
        
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full z-0 bg-white">
            <img src="{{ asset('assets/home.png') }}" alt="Background Image" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent pointer-events-none"></div>
        </div>

        <div x-ref="contentContainer" class="container mx-auto px-6 max-w-7xl relative z-10 grid md:grid-cols-2 gap-12 items-center pointer-events-auto">
            <!-- Left Content -->
            <div>
                <h1 x-ref="title" class="font-bebas text-5xl md:text-6xl lg:text-7xl xl:text-8xl leading-[1.0] text-slate-900 tracking-wider md:tracking-widest mb-6 relative opacity-0">
                    <svg width="0" height="0" class="absolute pointer-events-none" aria-hidden="true">
                        <defs>
                            <filter id="inner-shadow">
                                <feOffset dx="0" dy="12" />
                                <feGaussianBlur stdDeviation="8" result="offset-blur" />
                                <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                                <feFlood floodColor="#7e22ce" floodOpacity="0.6" result="color" />
                                <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                                <feComposite operator="over" in="shadow" in2="SourceGraphic" />
                            </filter>
                        </defs>
                    </svg>
                    KONSULTASIKAN <br />
                    <span class="bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 text-transparent bg-clip-text inline-block"
                          style="filter: url(#inner-shadow)">
                        WEBSITE ANDA
                    </span>
                </h1>
                <div x-ref="sub" class="opacity-0">
                    <p class="text-slate-500 text-lg md:text-xl max-w-md mb-10 leading-relaxed font-light">
                        Kami membangun solusi TI yang tangguh, platform digital yang memukau, dan teknologi inovatif yang disesuaikan untuk meningkatkan bisnis Anda.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ url('/contact') }}" class="px-8 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bebas tracking-[0.15em] text-lg hover:shadow-lg hover:shadow-purple-500/30 hover:-translate-y-1 transition-all duration-300 rounded-full inline-block">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Floating Cards -->
            <div x-ref="cards" class="hidden md:flex flex-col gap-6 items-end justify-center">
                <div class="glass p-6 w-80 transform translate-x-8 hover:-translate-x-2 transition-transform duration-500 cursor-pointer group rounded-3xl opacity-0 bg-white/70 backdrop-blur-md border border-white/50 shadow-xl">
                    <p class="text-purple-600 font-bebas tracking-widest mb-1 text-sm">Layanan Unggulan</p>
                    <h3 class="text-2xl font-bebas tracking-wider mb-2 text-slate-800 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-indigo-500 group-hover:to-purple-500 transition-all">Aplikasi Web Enterprise</h3>
                    <div class="flex justify-between items-center text-sm border-t border-slate-200 pt-3 mt-3">
                        <span class="text-slate-400">Teknologi</span>
                        <span class="font-bebas text-xl text-slate-700">Laravel & Vue</span>
                    </div>
                </div>

                <div class="glass p-6 w-80 hover:-translate-x-4 transition-transform duration-500 cursor-pointer group rounded-3xl opacity-0 bg-white/70 backdrop-blur-md border border-white/50 shadow-xl">
                    <p class="text-pink-500 font-bebas tracking-widest mb-1 text-sm">Teknologi Terbaru</p>
                    <h3 class="text-2xl font-bebas tracking-wider mb-2 text-slate-800 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-purple-500 group-hover:to-pink-500 transition-all">Integrasi AI & Data</h3>
                    <div class="flex justify-between items-center text-sm border-t border-slate-200 pt-3 mt-3">
                        <span class="text-slate-400">Teknologi</span>
                        <span class="font-bebas text-xl text-slate-700">Python AI</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

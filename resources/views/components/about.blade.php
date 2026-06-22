<section id="about" class="relative bg-[#f8fafc] text-slate-900" x-data="premiumAbout()">
    
    <!-- Video Opening Overlay -->
    <div x-show="showVideo" 
         x-transition:leave="transition ease-in-out duration-1000" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         class="fixed inset-0 z-[9999] bg-black flex items-center justify-center">
        <video x-ref="openingVideo" class="w-full h-full object-cover" autoplay muted playsinline
               @ended="endVideo()">
            <source src="{{ asset('assets/about.mp4') }}" type="video/mp4">
        </video>
        <button @click="endVideo()" class="absolute bottom-10 right-10 px-6 py-2 border border-white/30 rounded-full text-white/70 hover:text-white hover:bg-white/10 z-[10000] tracking-widest text-xs uppercase transition-all">Skip Video</button>
    </div>

    <!-- Pinned Container -->
    <div class="sticky top-0 h-[100dvh] w-full overflow-hidden" x-ref="container">
        
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full z-0 bg-white">
            <img src="{{ asset('assets/about.png') }}" alt="About Background" class="w-full h-full object-cover opacity-30 grayscale-[50%]">
            <!-- Dark Mode Overlay -->
            <div class="absolute inset-0 bg-slate-950 opacity-0" x-ref="bgDarkOverlay"></div>
        </div>

        <!-- Ambient Glows -->
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-pink-500/15 rounded-full blur-[120px] pointer-events-none mix-blend-multiply"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-purple-500/15 rounded-full blur-[120px] pointer-events-none mix-blend-multiply"></div>
        <div class="absolute top-[40%] left-[30%] w-[30%] h-[30%] bg-blue-500/10 rounded-full blur-[100px] pointer-events-none mix-blend-multiply"></div>
        
        <!-- Center White Blur for Text Readability -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90vw] h-[90vh] bg-white/90 rounded-full filter blur-[140px] z-10" x-ref="whiteBlur1"></div>

        <!-- Content Area -->
        <div class="absolute inset-0 z-20 flex items-center justify-center px-4 md:px-8 pointer-events-none perspective-[1000px]">
            <div class="relative w-full max-w-5xl flex items-center justify-center h-full">
                
                <!-- Inner Shadow Filter Definition (Matching Home Page) -->
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
                
                <!-- Card 1: Hero dengan Logo -->
                <div class="seq-card absolute w-full max-w-3xl flex flex-col items-center justify-center text-center opacity-0 transform-gpu pointer-events-auto">
                    <p class="text-purple-600 text-sm md:text-base font-bold tracking-[0.3em] uppercase mb-4">
                        Konsultan IT & Software House
                    </p>
                    <h1 class="font-bebas text-6xl sm:text-7xl md:text-[9rem] text-slate-900 tracking-wide leading-[0.85] mb-6">
                        REKAYASA
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 mt-2 inline-block" style="filter: url(#inner-shadow)">MASA DEPAN</span>
                    </h1>
                    <p class="text-slate-600 text-base md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                        NetPartner hadir sebagai mitra strategis dalam perjalanan transformasi digital Anda. Kami menciptakan ekosistem teknologi cerdas yang dirancang khusus untuk mempercepat pertumbuhan dan skalabilitas bisnis modern di Indonesia.
                    </p>
                </div>

                <!-- Card 2: Tentang NetPartner -->
                <div class="seq-card absolute w-full max-w-4xl opacity-0 transform-gpu pointer-events-auto text-center">
                    <div class="w-24 h-24 md:w-32 md:h-32 mx-auto mb-8 relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-purple-600 rounded-3xl opacity-15 blur-2xl scale-125"></div>
                        <img src="/logo.png" alt="NetPartner" class="w-full h-full object-contain relative z-10 drop-shadow-lg" />
                    </div>
                    <p class="text-pink-500 text-sm font-bold tracking-[0.3em] uppercase mb-6">Mengenal Kami</p>
                    <h2 class="font-bebas text-5xl md:text-7xl text-slate-900 tracking-wide mb-8">
                        TENTANG <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-500">NETPARTNER</span>
                    </h2>
                    <div class="space-y-5 text-slate-600 text-base md:text-lg leading-relaxed max-w-3xl mx-auto font-light text-justify md:text-center">
                        <p>
                            Berdiri dengan dedikasi tinggi terhadap kemajuan ekosistem teknologi, <strong class="text-slate-800">NetPartner</strong> adalah konsultan IT terkemuka dan software house inovatif yang berfokus pada penciptaan nilai bisnis jangka panjang. Kami memahami bahwa di era disrupsi digital, sekadar memiliki website tidaklah cukup.
                        </p>
                        <p>
                            Kami mengkhususkan diri dalam merancang arsitektur sistem informasi yang tangguh, pembuatan aplikasi mobile tingkat enterprise, dan implementasi teknologi cloud computing yang cerdas. Setiap baris kode yang kami tulis didedikasikan untuk mengotomatisasi alur kerja Anda, menekan biaya operasional, dan meningkatkan Return on Investment secara maksimal.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Visi & Misi -->
                <div class="seq-card absolute w-full max-w-5xl opacity-0 transform-gpu pointer-events-auto">
                    <div class="grid md:grid-cols-2 gap-8 md:gap-16 items-start px-2 md:px-0">
                        <div class="text-left">
                            <p class="text-purple-600 text-sm font-bold tracking-[0.3em] uppercase mb-4">Visi</p>
                            <h2 class="font-bebas text-4xl md:text-5xl text-slate-900 leading-none mb-6">
                                Katalisator
                                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">Transformasi Bisnis</span>
                            </h2>
                            <p class="text-slate-600 md:text-lg leading-relaxed font-light mb-4">
                                Visi kami adalah menjadi tulang punggung digital bagi perusahaan berskala nasional maupun multinasional. Kami merekayasa jalur kesuksesan Anda dengan mentransformasi ide kompleks menjadi solusi digital yang terukur dan berdampak nyata.
                            </p>
                        </div>
                        <div class="text-left">
                            <p class="text-pink-500 text-sm font-bold tracking-[0.3em] uppercase mb-4">Misi</p>
                            <h2 class="font-bebas text-4xl md:text-5xl text-slate-900 leading-none mb-6">
                                Komitmen
                                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-blue-500">Tanpa Kompromi</span>
                            </h2>
                            <div class="space-y-4 text-slate-600 md:text-lg leading-relaxed font-light">
                                <div class="flex items-start gap-3">
                                    <span class="w-1.5 h-1.5 rounded-full bg-pink-500 mt-2.5 shrink-0"></span>
                                    <p>Menghadirkan teknologi masa depan yang mengutamakan keamanan aset data dan performa tinggi.</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500 mt-2.5 shrink-0"></span>
                                    <p>Membangun hubungan kemitraan jangka panjang yang saling menguntungkan bersama setiap klien.</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-2.5 shrink-0"></span>
                                    <p>Menjadi konsultan tepercaya yang siap menghadapi lonjakan kebutuhan bisnis kapan pun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Layanan (Dark Mode) -->
                <div class="seq-card absolute w-full max-w-5xl opacity-0 transform-gpu pointer-events-auto text-center">
                    <p class="text-purple-400 text-sm font-bold tracking-[0.3em] uppercase mb-6">Spesialisasi Kami</p>
                    <h2 class="font-bebas text-5xl md:text-7xl text-white tracking-wide mb-12">
                        LAYANAN <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400">PREMIUM</span>
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 text-center text-white">
                        <div class="group">
                            <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-4 bg-gradient-to-br from-pink-500 to-purple-400 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h4 class="font-bold text-base md:text-lg mb-1">Web Development</h4>
                            <p class="text-slate-400 text-xs md:text-sm font-light">Website dinamis, E-Commerce, dan Web App responsif.</p>
                        </div>
                        <div class="group">
                            <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                            <h4 class="font-bold text-base md:text-lg mb-1">Mobile Apps</h4>
                            <p class="text-slate-400 text-xs md:text-sm font-light">Aplikasi iOS & Android performa tinggi.</p>
                        </div>
                        <div class="group">
                            <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <h4 class="font-bold text-base md:text-lg mb-1">Cloud Architecture</h4>
                            <p class="text-slate-400 text-xs md:text-sm font-light">Infrastruktur AWS / GCP dengan zero-downtime.</p>
                        </div>
                        <div class="group">
                            <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-4 bg-gradient-to-br from-pink-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <h4 class="font-bold text-base md:text-lg mb-1">IT Consulting</h4>
                            <p class="text-slate-400 text-xs md:text-sm font-light">Strategi digitalisasi dan audit sistem bisnis.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Call to Action -->
                <div class="seq-card absolute w-full max-w-4xl opacity-0 transform-gpu pointer-events-auto text-center">
                    <p class="text-blue-400 text-sm font-bold tracking-[0.3em] uppercase mb-6">Mulai Proyek Anda</p>
                    <h2 class="font-bebas text-5xl md:text-7xl tracking-wide mb-6 text-white leading-[0.9]">
                        SIAP MENTRANSFORMASI <br class="hidden md:block"/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-blue-400">BISNIS ANDA?</span>
                    </h2>
                    <p class="text-slate-300 md:text-xl leading-relaxed max-w-2xl mx-auto font-light mb-12">
                        Jangan biarkan kompetitor Anda melangkah lebih dulu. Bersama NetPartner, mari kita wujudkan ide brilian Anda menjadi produk perangkat lunak yang tangguh, aman, dan siap mendominasi pasar.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ url('/contact') }}" class="px-8 py-4 rounded-full bg-gradient-to-r from-pink-500 to-purple-600 text-white font-bold tracking-widest text-sm hover:shadow-[0_0_30px_rgba(236,72,153,0.5)] transition-all transform hover:-translate-y-1">
                            KONSULTASI GRATIS
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Spacer -->
    <div class="h-[600vh]" x-ref="spacer"></div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('premiumAbout', () => ({
                frameCount: 150,
                showVideo: !sessionStorage.getItem('aboutVideoPlayed'),

                endVideo() {
                    this.showVideo = false;
                    document.body.style.overflow = '';
                    sessionStorage.setItem('aboutVideoPlayed', 'true');
                },
                
                init() {
                    if (this.showVideo) {
                        document.body.style.overflow = 'hidden';
                        window.scrollTo(0, 0);
                        setTimeout(() => {
                            if (this.$refs.openingVideo) {
                                this.$refs.openingVideo.play().catch(() => {
                                    this.endVideo();
                                });
                            }
                        }, 100);
                    }

                    let tl = gsap.timeline({
                        scrollTrigger: { 
                            trigger: this.$el, 
                            start: "top top", 
                            end: "bottom bottom", 
                            scrub: 2
                        }
                    });

                    const cards = this.$el.querySelectorAll('.seq-card');
                    const dur = (this.frameCount - 1) / cards.length;
                    
                    cards.forEach((card, i) => {
                        const s = i * dur;
                        
                        if (i === 0) {
                            gsap.set(card, { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)' });
                            tl.to(card, { 
                                opacity: 0, 
                                y: -80, 
                                scale: 1.05, 
                                filter: 'blur(15px)',
                                duration: dur * 0.35, 
                                ease: "power2.in" 
                            }, s + dur - dur*0.35);
                        } else {
                            gsap.set(card, { opacity: 0, y: 100, scale: 0.95, filter: 'blur(10px)' });
                            
                            // Dark Mode for Card 4 (Layanan) and stay dark for Card 5 (CTA)
                            if (i === 3) {
                                tl.to(this.$refs.bgDarkOverlay, { opacity: 0.95, duration: dur * 0.4, ease: "power2.inOut" }, s - dur*0.15);
                                tl.to(this.$refs.whiteBlur1, { opacity: 0, duration: dur * 0.4, ease: "power2.inOut" }, s - dur*0.15);
                            }

                            // Entrance
                            tl.to(card, { 
                                opacity: 1, 
                                y: 0, 
                                scale: 1, 
                                filter: 'blur(0px)',
                                duration: dur * 0.35, 
                                ease: "power3.out" 
                            }, s);
                            
                            // Exit (not on last card)
                            if (i < cards.length - 1) {
                                tl.to(card, { 
                                    opacity: 0, 
                                    y: -80, 
                                    scale: 1.05, 
                                    filter: 'blur(15px)',
                                    duration: dur * 0.35, 
                                    ease: "power2.in" 
                                }, s + dur - dur*0.35);
                            }
                        }
                    });
                },

            }));
        });
    </script>
</section>

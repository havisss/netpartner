<section id="why-us" class="bg-slate-50 py-20 relative overflow-hidden">
    
    <div class="container mx-auto px-6 max-w-4xl relative z-10" x-data="networkTimeline()">
        
        <!-- Header -->
        <div class="text-center mb-16" x-ref="header">
            <h2 class="font-bebas text-5xl md:text-6xl leading-[1.0] text-slate-900 tracking-wider mb-4">
                MENGAPA <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-indigo-500">KAMI?</span>
            </h2>
            <p class="text-slate-600 md:text-lg font-light max-w-xl mx-auto">
                Kelebihan utama NetPartner yang membuat ratusan bisnis mempercayakan sistem mereka pada kami.
            </p>
        </div>

        <!-- The Network Timeline -->
        <div class="relative w-full" x-ref="timelineContainer">
            
            <!-- Central Main Vertical Line -->
            <!-- Left on mobile (24px), center on desktop -->
            <div class="absolute top-0 bottom-0 left-[24px] md:left-1/2 md:-translate-x-1/2 w-1 bg-slate-200 rounded-full" x-ref="mainLineBg"></div>
            
            <!-- The Animated Glow Line -->
            <div class="absolute top-0 bottom-0 left-[24px] md:left-1/2 md:-translate-x-1/2 w-1 bg-gradient-to-b from-pink-500 via-purple-500 to-indigo-500 rounded-full origin-top scale-y-0 shadow-[0_0_15px_rgba(168,85,247,0.5)] z-0" x-ref="mainLineGlow"></div>

            <div class="relative flex flex-col gap-8 md:gap-12">
                
                <!-- Node 1 (Kiri di Desktop) -->
                <div class="relative flex items-center w-full group timeline-node">
                    
                    <!-- Point -->
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-slate-200 border-4 border-white z-10 node-point transition-colors duration-300"></div>
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-pink-500 shadow-[0_0_15px_rgba(236,72,153,0.8)] z-10 node-glow opacity-0 scale-50"></div>
                    
                    <!-- Card (Kiri) -->
                    <div class="w-[calc(100%-48px)] ml-auto md:w-1/2 md:ml-0 md:mr-auto md:pr-12 opacity-0 translate-y-8 node-card">
                        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 bg-pink-100 text-pink-600 rounded-xl flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800">Inovasi Terkini</h3>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Tanpa template lama. Menggunakan arsitektur modern (Laravel, Vue) untuk performa maksimal.</p>
                        </div>
                    </div>
                </div>

                <!-- Node 2 (Kanan di Desktop) -->
                <div class="relative flex items-center w-full group timeline-node">
                    
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-slate-200 border-4 border-white z-10 node-point"></div>
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-purple-500 shadow-[0_0_15px_rgba(168,85,247,0.8)] z-10 node-glow opacity-0 scale-50"></div>
                    
                    <!-- Card (Kanan) -->
                    <div class="w-[calc(100%-48px)] ml-auto md:w-1/2 md:pl-12 opacity-0 translate-y-8 node-card">
                        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800">Keamanan Ketat</h3>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Enkripsi level tinggi dan perlindungan aktif terhadap serangan cyber seperti SQL Injection & XSS.</p>
                        </div>
                    </div>
                </div>

                <!-- Node 3 (Kiri di Desktop) -->
                <div class="relative flex items-center w-full group timeline-node">
                    
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-slate-200 border-4 border-white z-10 node-point"></div>
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-indigo-500 shadow-[0_0_15px_rgba(99,102,241,0.8)] z-10 node-glow opacity-0 scale-50"></div>
                    
                    <!-- Card (Kiri) -->
                    <div class="w-[calc(100%-48px)] ml-auto md:w-1/2 md:ml-0 md:mr-auto md:pr-12 opacity-0 translate-y-8 node-card">
                        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800">UI/UX Memukau</h3>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Visual atraktif dan navigasi super intuitif yang menjamin retensi pelanggan Anda meningkat.</p>
                        </div>
                    </div>
                </div>

                <!-- Node 4 (Kanan di Desktop) -->
                <div class="relative flex items-center w-full group timeline-node">
                    
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-slate-200 border-4 border-white z-10 node-point"></div>
                    <div class="absolute left-[24px] md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.8)] z-10 node-glow opacity-0 scale-50"></div>
                    
                    <!-- Card (Kanan) -->
                    <div class="w-[calc(100%-48px)] ml-auto md:w-1/2 md:pl-12 opacity-0 translate-y-8 node-card">
                        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800">Support 24/7</h3>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">Dukungan penuh purna-jual untuk menjamin performa server dan aplikasi berjalan tanpa henti.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function networkTimeline() {
            return {
                init() {
                    gsap.registerPlugin(ScrollTrigger);

                    let tl = gsap.timeline({
                        scrollTrigger: {
                            trigger: this.$refs.timelineContainer,
                            start: "top 70%",
                            end: "bottom 80%",
                            scrub: 1
                        }
                    });

                    // Animate Main Glow Line downwards
                    tl.to(this.$refs.mainLineGlow, {
                        scaleY: 1,
                        ease: "none",
                        duration: 10
                    }, 0);

                    // Select all nodes
                    const nodes = this.$el.querySelectorAll('.timeline-node');
                    
                    nodes.forEach((node, index) => {
                        const startTime = (index + 0.5) * (10 / nodes.length);
                        
                        // Point Glowing
                        tl.to(node.querySelector('.node-point'), { backgroundColor: '#cbd5e1', duration: 0.1 }, startTime);
                        tl.to(node.querySelector('.node-glow'), { opacity: 1, scale: 1, duration: 0.3, ease: "back.out(2)" }, startTime);
                        
                        // Card sliding in
                        tl.to(node.querySelector('.node-card'), { 
                            y: 0, 
                            opacity: 1, 
                            duration: 1, 
                            ease: "power2.out" 
                        }, startTime + 0.2);
                    });
                }
            }
        }
    </script>
</section>

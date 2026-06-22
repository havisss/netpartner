<section class="relative w-full min-h-[100vh] flex flex-col justify-between overflow-hidden bg-[#0B0F19]">
    <!-- Abstract Sharp Top Separator -->
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-none z-20">
        <svg class="block w-full h-[80px] md:h-[160px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#f8fafc" fill-opacity="1" d="M0,0 L1440,0 L1440,80 L1152,190 L864,90 L576,280 L288,140 L0,220 Z"></path>
            <path fill="#f8fafc" fill-opacity="0.3" d="M0,0 L1440,0 L1440,180 L1152,80 L864,280 L576,140 L288,250 L0,120 Z"></path>
            <path fill="#f8fafc" fill-opacity="0.1" d="M0,0 L1440,0 L1440,280 L1152,140 L864,320 L576,90 L288,300 L0,180 Z"></path>
        </svg>
    </div>

    <!-- Advanced Dark Background with Animated Orbs -->
    <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] right-[-5%] w-[70vw] h-[70vw] max-w-[800px] max-h-[800px] bg-indigo-600/20 rounded-full blur-[150px] mix-blend-screen animate-pulse" style="animation-duration: 8s;"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[60vw] h-[60vw] max-w-[700px] max-h-[700px] bg-pink-600/20 rounded-full blur-[120px] mix-blend-screen animate-pulse" style="animation-duration: 12s;"></div>
        
        <!-- Subtle noise overlay for premium feel -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-6 max-w-7xl relative z-10 flex-grow flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-24 pt-40 pb-20"
         x-data="{
             init() {
                 let tl = gsap.timeline({
                     scrollTrigger: {
                         trigger: this.$refs.ctaWrapper,
                         start: 'top 75%',
                         toggleActions: 'play none none none'
                     }
                 });
                 tl.from(this.$refs.leftText, { x: -50, opacity: 0, duration: 1, ease: 'power3.out' })
                   .from(this.$refs.rightCard, { y: 50, opacity: 0, duration: 1, ease: 'power3.out' }, '-=0.6');
             }
         }" x-ref="ctaWrapper">
        
        <!-- Left: Huge Typography -->
        <div class="w-full lg:w-1/2" x-ref="leftText">
            <div class="inline-flex items-center gap-3 mb-8 px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-sm font-bold tracking-widest uppercase shadow-[0_0_20px_rgba(99,102,241,0.2)]">
                <span class="w-2 h-2 rounded-full bg-pink-500 animate-ping"></span>
                Tersedia Untuk Proyek Baru
            </div>
            
            <h2 class="font-bebas text-6xl md:text-8xl lg:text-[7rem] tracking-wide mb-6 text-white leading-[0.85] drop-shadow-2xl">
                MARI CIPTAKAN <br/> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-400">MAHAKARYA</span> <br/>
                DIGITAL
            </h2>
            
            <p class="text-slate-400 text-lg md:text-2xl font-light leading-relaxed max-w-xl mt-8">
                Tinggalkan batasan lama. Bersama NetPartner, kita bangun platform teknologi yang tak hanya memukau secara visual, tapi mendominasi secara performa.
            </p>
        </div>

        <!-- Right: Glassmorphic Interactive Card -->
        <div class="w-full lg:w-5/12 perspective-1000" x-ref="rightCard">
            <div class="relative bg-white/5 backdrop-blur-2xl border border-white/10 rounded-[2.5rem] p-8 md:p-12 shadow-[0_30px_60px_rgba(0,0,0,0.5)] transform-gpu hover:-translate-y-2 hover:shadow-[0_40px_80px_rgba(168,85,247,0.2)] transition-all duration-500 overflow-hidden group">
                <!-- Inner glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-pink-500/20 blur-[80px] rounded-full group-hover:bg-pink-500/30 transition-colors duration-700"></div>
                
                <h3 class="text-3xl font-bebas tracking-wide text-white mb-2 relative z-10">Mulai Sekarang</h3>
                <p class="text-slate-400 text-sm mb-10 relative z-10">Konsultasi awal 100% gratis. Diskusikan ide Anda langsung dengan arsitek utama kami.</p>
                
                <div class="flex flex-col gap-5 relative z-10">
                    <a href="{{ url('/contact') }}" class="w-full py-5 rounded-2xl bg-gradient-to-r from-pink-500 to-indigo-600 text-white font-bold tracking-widest text-sm hover:shadow-[0_0_30px_rgba(236,72,153,0.5)] transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3">
                        JADWALKAN KONSULTASI
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="mailto:hello@netpartner.id" class="w-full py-5 rounded-2xl bg-white/5 border border-white/10 text-white font-bold tracking-widest text-sm hover:bg-white/10 transition-all flex items-center justify-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        HELLO@NETPARTNER.ID
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

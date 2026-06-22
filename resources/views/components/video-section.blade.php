<section class="py-20 bg-white overflow-hidden"
    x-data="{
        initGsap() {
            // Pulse animation on play button softly
            gsap.to(this.$refs.playBtn, {
                scale: 1.05,
                boxShadow: '0 0 25px rgba(99, 102, 241, 0.4)',
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut'
            });

            // Scale down and round corners on scroll
            gsap.fromTo(this.$refs.videoWrapper,
                { scale: 1, borderRadius: '0px' },
                {
                    scale: 0.95,
                    borderRadius: '48px',
                    ease: 'none',
                    scrollTrigger: {
                        trigger: this.$el,
                        start: 'top center',
                        end: 'bottom center',
                        scrub: true
                    }
                }
            );
        }
    }"
    x-init="initGsap()">
    
    <div x-ref="videoWrapper" class="relative w-full h-[80vh] mx-auto overflow-hidden group cursor-pointer shadow-2xl">
        <div class="absolute inset-0 bg-slate-900/30 backdrop-blur-[1px] z-10 group-hover:bg-slate-900/10 transition-colors duration-700"></div>
        
        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1920&q=80" 
             alt="Tech Experience Video" 
             class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out" />
        
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center">
            <button x-ref="playBtn" class="w-24 h-24 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white shadow-xl mb-8 transition-all hover:scale-110">
                <svg class="w-10 h-10 ml-2" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            </button>
            <h3 class="font-bebas text-4xl md:text-6xl text-white tracking-widest drop-shadow-lg">RASAKAN INOVASI DIGITAL</h3>
        </div>
    </div>
</section>

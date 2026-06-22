<section id="portfolio" class="bg-gradient-to-b from-slate-900 to-slate-950 py-24 md:py-32 relative overflow-hidden" 
     x-data="portfolioGallery()">
     
    <!-- Ambient Glow -->
    <div class="absolute top-0 right-0 w-[50vw] h-[50vw] bg-indigo-600/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[50vw] h-[50vw] bg-pink-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 md:mb-24" x-ref="header">
            <span class="text-indigo-400 font-bebas tracking-[0.2em] text-sm md:text-base uppercase mb-3 block">Portofolio</span>
            <h2 class="font-bebas text-6xl md:text-8xl lg:text-[9rem] text-white tracking-widest leading-[0.85] mb-6 drop-shadow-2xl">
                EKSPLORASI <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500">KARYA</span>
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full mb-8"></div>
            <p class="text-slate-400 text-lg md:text-xl font-light max-w-2xl mx-auto">
                Koleksi mahakarya arsitektur digital dan aplikasi tingkat lanjut yang telah kami ciptakan untuk berbagai industri global.
            </p>
        </div>

        <!-- Interactive Filters -->
        <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-16" x-ref="filters">
            <template x-for="category in categories" :key="category">
                <button @click="setFilter(category)" 
                        class="px-6 py-2.5 rounded-full font-bebas tracking-widest text-sm md:text-base transition-all duration-300 border backdrop-blur-md"
                        :class="activeFilter === category 
                            ? 'bg-white text-slate-900 border-white shadow-[0_0_20px_rgba(255,255,255,0.4)] scale-105' 
                            : 'bg-white/5 text-slate-400 border-white/10 hover:bg-white/10 hover:text-white'">
                    <span x-text="category"></span>
                </button>
            </template>
        </div>

        <!-- Masonry Grid Gallery -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6" x-ref="grid">
            
            <template x-for="item in filteredItems" :key="item.id">
                <!-- Project Card Wrapper -->
                <div class="break-inside-avoid relative rounded-[2rem] overflow-hidden group cursor-pointer border border-white/10 shadow-2xl bg-slate-900 transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-1 hover:shadow-[0_20px_40px_rgba(99,102,241,0.15)]"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95 hidden">
                    
                    <!-- Media: Image or Video -->
                    <div class="relative w-full" :class="item.aspectClass">
                        <template x-if="item.type === 'video'">
                            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-40 transition-all duration-700 ease-out">
                                <source :src="item.src" type="video/mp4">
                            </video>
                        </template>
                        <template x-if="item.type === 'image'">
                            <img :src="item.src" :alt="item.title" class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-40 transition-all duration-700 ease-out group-hover:scale-110">
                        </template>
                        
                        <!-- Gradient Overlays -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent"></div>
                    </div>

                    <!-- Content Hover Reveal -->
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <!-- Floating Category Badge -->
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out mb-4">
                            <span class="inline-block px-3 py-1 rounded-full text-white text-[10px] md:text-xs font-bold tracking-widest uppercase bg-indigo-600 shadow-lg border border-white/10"
                                  x-text="item.category"></span>
                        </div>
                        
                        <!-- Title -->
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out delay-75">
                            <h3 class="text-3xl md:text-4xl font-bebas text-white tracking-wide leading-tight mb-2 drop-shadow-xl group-hover:text-indigo-300 transition-colors duration-300" x-text="item.title"></h3>
                        </div>
                        
                        <!-- Hidden Tech Stack & Button -->
                        <div class="h-0 opacity-0 group-hover:h-auto group-hover:opacity-100 overflow-hidden transition-all duration-500 ease-out delay-150 mt-2">
                            <div class="w-full h-px bg-white/20 mb-4"></div>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <template x-for="tech in item.techs">
                                    <span class="text-xs font-sans text-slate-300 bg-white/10 border border-white/10 px-2 py-1 rounded-md" x-text="tech"></span>
                                </template>
                            </div>
                            <div class="flex items-center gap-2 text-white font-sans text-xs tracking-widest uppercase group/btn">
                                Lihat Detail
                                <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center border border-white/20 group-hover/btn:bg-indigo-400 group-hover/btn:text-white transition-colors shadow-lg">
                                    <svg class="w-3 h-3 transform -rotate-45 group-hover/btn:rotate-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            
        </div>
        
    </div>

    <!-- Alpine Data Logic -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('portfolioGallery', () => ({
                categories: ['Semua', 'Web App', 'E-Commerce', 'Cloud', 'AI & Data'],
                activeFilter: 'Semua',
                items: [
                    { id: 1, type: 'image', category: 'Web App', title: 'Dashboard Finansial Pro', src: '{{ asset("assets/portfolio/1.png") }}', aspectClass: 'h-[400px]', techs: ['Vue.js', 'Laravel'] },
                    { id: 2, type: 'video', category: 'Cloud', title: 'SaaS HR Enterprise', src: '{{ asset("assets/home.mp4") }}', aspectClass: 'h-[600px]', techs: ['AWS', 'React', 'Node.js'] },
                    { id: 3, type: 'image', category: 'E-Commerce', title: 'Ekosistem Retail Modern', src: '{{ asset("assets/portfolio/2.png") }}', aspectClass: 'h-[450px]', techs: ['Next.js', 'Stripe'] },
                    { id: 4, type: 'image', category: 'Cloud', title: 'Arsitektur Server Skalabel', src: '{{ asset("assets/portfolio/3.png") }}', aspectClass: 'h-[350px]', techs: ['Docker', 'Kubernetes'] },
                    { id: 5, type: 'video', category: 'AI & Data', title: 'Deteksi Wajah Biometrik', src: '{{ asset("assets/opening.mp4") }}', aspectClass: 'h-[500px]', techs: ['Python', 'TensorFlow'] },
                    { id: 6, type: 'image', category: 'Web App', title: 'Platform Edukasi Daring', src: '{{ asset("assets/home.png") }}', aspectClass: 'h-[400px]', techs: ['Laravel', 'Livewire'] },
                ],
                get filteredItems() {
                    if (this.activeFilter === 'Semua') {
                        return this.items;
                    }
                    return this.items.filter(item => item.category === this.activeFilter);
                },
                setFilter(category) {
                    this.activeFilter = category;
                },
                init() {
                    // GSAP Entrance Animations
                    gsap.fromTo(this.$refs.header,
                        { opacity: 0, y: 30 },
                        { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', scrollTrigger: { trigger: this.$el, start: 'top 80%' } }
                    );
                    gsap.fromTo(this.$refs.filters,
                        { opacity: 0, scale: 0.95 },
                        { opacity: 1, scale: 1, duration: 1, delay: 0.3, ease: 'power3.out', scrollTrigger: { trigger: this.$el, start: 'top 80%' } }
                    );
                    gsap.fromTo(this.$refs.grid,
                        { opacity: 0, y: 50 },
                        { opacity: 1, y: 0, duration: 1, delay: 0.5, ease: 'power3.out', scrollTrigger: { trigger: this.$el, start: 'top 75%' } }
                    );
                }
            }));
        });
    </script>
</section>

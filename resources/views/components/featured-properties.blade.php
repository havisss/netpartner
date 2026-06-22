<section id="featured" class="pt-20 lg:pt-24 pb-32 lg:pb-40 bg-slate-900 relative z-10 overflow-x-clip"
    x-data="{
        expandedCards: {},
        toggleFeatures(idx) {
            this.expandedCards[idx] = !this.expandedCards[idx];
        },
        initGsap() {
            gsap.fromTo(this.$refs.cards.children,
                { opacity: 0, y: 50 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    stagger: 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: this.$el,
                        start: 'top 75%'
                    }
                }
            );
        }
    }"
    x-init="initGsap()">

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        <div class="text-center mb-16">
            <span class="text-indigo-400 font-bebas tracking-[0.2em] text-sm md:text-base uppercase mb-3 block">Pilihan Paket</span>
            <h3 class="font-bebas text-5xl md:text-6xl tracking-wider text-white">Paket Unggulan</h3>
            <p class="text-slate-400 text-lg mt-4 max-w-2xl mx-auto">Solusi lengkap untuk kebutuhan digitalisasi bisnis Anda dengan harga transparan dan tanpa biaya tersembunyi.</p>
        </div>

        <div x-ref="cards" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 items-start">
            @php
                $properties = [
                    [
                        'title' => 'Silver',
                        'category' => 'Paket Tahunan',
                        'price' => 'Rp 700rb',
                        'description' => 'Paket pembuatan website yang ini cocok bagi Anda yang baru memulai bisnis dan membutuhkan website sederhana yang mudah diakses.',
                        'renewal' => 'Perpanjangan Rp 500rb',
                        'isPopular' => false,
                        'features' => ['4 Menu', 'FREE Domain Web.id', 'Hosting 500 MB', 'Integrasi Sosial Media', 'Website SSL', 'Template WP Premium', 'User + Video Panduan Edit', 'Server Rata-Rata 5 Mili Detik', 'Bandwidth Unlimited', 'Standar Kontak Form', 'Free Support', 'Bergaransi Selamanya']
                    ],
                    [
                        'title' => 'Gold',
                        'category' => 'Paket Tahunan',
                        'price' => 'Rp 1,6jt',
                        'description' => 'Paket pembuatan website ini cocok untuk Anda yang membutuhkan website dengan fitur tambahan seperti e-commerce, blog, dan lainnya.',
                        'renewal' => 'Perpanjangan Rp 600rb',
                        'isPopular' => false,
                        'features' => ['8 Menu', 'Gratis Domain .com', 'Hosting 3 GB', 'Integrasi Media Sosial', 'Free Whatsapp/Telepon', 'Website SSL', 'Template WP Premium', 'Perpanjang Setiap Tahun', 'User dan Video Panduan Edit', 'Free Banner dan Logo', 'Pemasangan Google Map', 'Respon Server Rata-Rata 5 Mili Detik', 'Bandwidth Unlimited', 'Statistic Kunjungan Website', 'Standar Kontak Form', 'Free Support', 'Garansi Selamanya']
                    ],
                    [
                        'title' => 'Diamond',
                        'category' => 'Paket Tahunan',
                        'price' => 'Rp 2jt',
                        'description' => 'Paket desain website ini sangat cocok bagi Anda yang membutuhkan website sebagai profil bisnis yang berguna untuk meningkatkan online presence.',
                        'renewal' => 'Perpanjangan Rp 1jt',
                        'isPopular' => true,
                        'features' => ['10 Menu', 'Gratis Domain com, co.id', 'Hosting 3 GB', 'Integrasi Media Sosial', 'Free Whatsapp/Telepon', 'Website SSL', 'Template WP Premium', 'Perpanjang Setiap Tahun', 'User dan Video Panduan Edit', 'Plugin Premium', 'Free Banner dan Logo', 'Pemasangan Google Map', 'Respon Server Rata-Rata 5 Mili Detik', 'Bandwidth Unlimited', 'Statistic Kunjungan Website', 'Standar Kontak Form', 'Free Support', 'Garansi Selamanya']
                    ],
                    [
                        'title' => 'Platinum',
                        'category' => 'Paket Tahunan',
                        'price' => 'Rp 3jt',
                        'description' => 'Paket desain website ini cocok untuk Anda yang membutuhkan website dengan fitur khusus yang lebih kompleks dan desain yang unik.',
                        'renewal' => 'Perpanjang 50% dari harga',
                        'isPopular' => false,
                        'features' => ['15-20 Menu', 'Gratis Domain com, id, co.id', 'Hosting 5 GB', 'Free Whatsapp/Telepon', 'Integrasi Media Sosial', 'Website SSL', 'Template WP Premium', 'Perpanjang Setiap Tahun', 'User dan Video Panduan Edit', 'Plugin Premium', 'Free Banner dan Logo', 'Free 1 Email Bisnis', 'Pemasangan Google Map', 'Respon Server Rata-Rata 5 Mili Detik', 'Bandwidth Unlimited', 'Statistic Kunjungan Website', 'Standar Kontak Form', 'Free Support', 'Garansi Selamanya', 'Integrasi Lapak Media']
                    ]
                ];
            @endphp

            @foreach($properties as $idx => $prop)
                <div class="flex flex-col gap-4 opacity-0 relative {{ $prop['isPopular'] ? 'z-20' : 'z-10 hover:z-20' }}">
                    
                    @if($prop['isPopular'])
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-indigo-500 text-white text-xs font-bold px-4 py-1.5 rounded-full tracking-widest whitespace-nowrap z-30 shadow-lg">
                            PALING LAKU
                        </div>
                    @endif

                    <!-- Clean Main Card -->
                    <div class="rounded-2xl p-6 md:p-8 flex-1 flex flex-col transition-all duration-300 {{ $prop['isPopular'] ? 'bg-slate-800 border-indigo-500 shadow-[0_0_30px_rgba(99,102,241,0.2)] border-2' : 'bg-white/5 border border-white/10 hover:border-white/20 hover:bg-white/10' }}">
                        
                        <span class="{{ $prop['isPopular'] ? 'text-indigo-400' : 'text-slate-400' }} font-bebas tracking-widest text-sm mb-2 block">{{ $prop['category'] }}</span>
                        <h4 class="font-bebas text-3xl text-white tracking-wider mb-3">{{ $prop['title'] }}</h4>
                        
                        <div class="mb-4 flex items-baseline gap-2">
                            <span class="text-4xl md:text-5xl font-bebas text-white tracking-wider">{{ $prop['price'] }}</span>
                        </div>
                        
                        <div class="text-xs font-bold text-slate-500 mb-6 uppercase tracking-widest">{{ $prop['renewal'] }}</div>

                        <p class="text-slate-400 text-sm leading-relaxed mb-8 flex-1">{{ $prop['description'] }}</p>

                        <button class="w-full flex justify-center items-center gap-2 py-3.5 rounded-lg font-bold text-sm tracking-widest uppercase transition-all {{ $prop['isPopular'] ? 'bg-indigo-600 text-white hover:bg-indigo-700' : 'bg-white/10 text-white hover:bg-white/20 border border-white/10' }}">
                            Pilih Paket
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>

                    <!-- Separate Features Box -->
                    <div class="bg-white/5 border {{ $prop['isPopular'] ? 'border-indigo-500/50' : 'border-white/10' }} rounded-2xl overflow-hidden backdrop-blur-md transition-all duration-300">
                        <button @click.prevent="toggleFeatures({{ $idx }})" class="w-full flex items-center justify-between p-4 text-sm font-bold text-white hover:bg-white/10 transition-colors">
                            <span class="flex items-center gap-2">
                                <svg class="w-5 h-5 {{ $prop['isPopular'] ? 'text-indigo-400' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                                Lihat Fitur Paket
                            </span>
                            <svg :class="expandedCards[{{ $idx }}] ? 'rotate-180 {{ $prop['isPopular'] ? 'text-indigo-400' : 'text-white' }}' : 'text-slate-500'" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>

                        <div x-show="expandedCards[{{ $idx }}]" x-collapse>
                            <div class="p-4 pt-0 space-y-3 border-t {{ $prop['isPopular'] ? 'border-indigo-500/30' : 'border-white/5' }} mt-2">
                                @foreach($prop['features'] as $feat)
                                    <div class="flex items-start gap-3">
                                        <div class="w-1.5 h-1.5 rounded-full {{ $prop['isPopular'] ? 'bg-indigo-400' : 'bg-slate-400' }} mt-1.5 shrink-0"></div>
                                        <p class="text-sm text-slate-300">{{ $feat }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

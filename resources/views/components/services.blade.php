<section id="services" class="min-h-screen py-24 bg-white relative overflow-hidden flex flex-col justify-center"
    x-data="{
        initGsap() {
            gsap.fromTo(this.$refs.cards.children,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    stagger: 0.15,
                    ease: 'power2.out',
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
        <div class="text-center mb-20">
            <h3 class="font-bebas text-5xl md:text-6xl tracking-wider text-slate-900">Layanan TI Khusus</h3>
        </div>

        <div x-ref="cards" class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $services = [
                    [
                        'title' => 'Pengembangan Web',
                        'desc' => 'Aplikasi web tingkat enterprise kustom yang dibangun untuk kecepatan, skalabilitas, dan keamanan.',
                        'icon' => '<svg class="w-8 h-8 text-indigo-400 group-hover:text-indigo-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>'
                    ],
                    [
                        'title' => 'Aplikasi Mobile',
                        'desc' => 'Pengalaman seluler native dan lintas platform yang melibatkan pengguna dan mendorong pertumbuhan bisnis.',
                        'icon' => '<svg class="w-8 h-8 text-indigo-400 group-hover:text-indigo-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>'
                    ],
                    [
                        'title' => 'Solusi Cloud',
                        'desc' => 'Infrastruktur skalabel, migrasi cloud, dan manajemen server yang tangguh untuk ketersediaan tinggi.',
                        'icon' => '<svg class="w-8 h-8 text-indigo-400 group-hover:text-indigo-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>'
                    ],
                    [
                        'title' => 'Desain UI/UX',
                        'desc' => 'Antarmuka pemenang penghargaan dan desain berpusat pada pengguna yang meningkatkan pengalaman digital.',
                        'icon' => '<svg class="w-8 h-8 text-indigo-400 group-hover:text-indigo-600 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>'
                    ]
                ];
            @endphp
            @foreach($services as $srv)
                <div class="glass p-10 group relative overflow-hidden transition-all duration-500 border border-slate-100 hover:border-indigo-200 hover:shadow-2xl hover:shadow-indigo-500/10 hover:-translate-y-2 rounded-3xl opacity-0">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-indigo-500/10 to-purple-500/5 rounded-full blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

                    <div class="mb-8 transform group-hover:scale-105 transition-all duration-500">
                        {!! $srv['icon'] !!}
                    </div>
                    <h4 class="font-bebas text-2xl tracking-widest text-slate-900 mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-indigo-600 group-hover:to-purple-600 transition-all">{{ $srv['title'] }}</h4>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">
                        {{ $srv['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

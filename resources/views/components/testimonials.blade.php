<section id="testimonials" class="pt-20 lg:pt-24 pb-32 lg:pb-48 bg-slate-900 relative z-10 overflow-hidden"
    x-data="{
        initGsap() {
            gsap.fromTo(this.$refs.heading,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: this.$el,
                        start: 'top 70%'
                    }
                }
            );
        }
    }"
    x-init="initGsap()">
    
    <!-- Decorative Neon Orbs -->
    <div class="absolute top-20 right-0 w-[400px] h-[400px] bg-purple-500/20 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-500/20 rounded-full blur-[150px] pointer-events-none"></div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        <div x-ref="heading" class="flex flex-col md:flex-row justify-center items-center text-center mb-16 opacity-0">
            <div>
                <h3 class="font-bebas text-5xl md:text-7xl tracking-wider text-white">Suara Klien</h3>
                <p class="text-slate-400 mt-4 max-w-xl mx-auto">Lihat apa yang dikatakan oleh klien kami tentang hasil kerja dan dedikasi tim kami.</p>
            </div>
        </div>
    </div>

    <div class="w-full overflow-hidden relative" style="mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
        <div class="flex gap-6 w-max animate-marquee py-6 hover:[animation-play-state:paused]">
            @php
                $reviews = [
                    ['text' => 'NetPartner memberikan pengalaman yang benar-benar sempurna. Keahlian teknis dan arsitektur skalabel mereka memungkinkan kami meluncurkan platform SaaS tanpa hambatan.', 'name' => 'Budi Santoso', 'role' => 'CEO, TechNova', 'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=200&q=80', 'rating' => 5],
                    ['text' => 'Tingkat kualitas kode dan desain UI tak tertandingi. Setiap iterasi yang mereka kirimkan adalah mahakarya. Tim mereka memahami inovasi digital sejati.', 'name' => 'Siti Rahmawati', 'role' => 'CTO, GlobalCorp', 'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80', 'rating' => 5],
                    ['text' => 'Kami sangat terkesan dengan kecepatan dan responsivitas tim NetPartner. Mereka tidak hanya membuat website, tapi juga membantu strategi digital kami.', 'name' => 'Andi Wijaya', 'role' => 'Founder, KreatifHub', 'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=200&q=80', 'rating' => 5],
                    ['text' => 'Desain yang luar biasa dan performa website yang cepat. Konversi penjualan kami meningkat drastis setelah bekerja sama dengan NetPartner.', 'name' => 'Diana Puspita', 'role' => 'Direktur Marketing', 'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=200&q=80', 'rating' => 5],
                    ['text' => 'Dukungan pelanggan yang sangat baik dan solusi yang ditawarkan selalu tepat sasaran. Sangat merekomendasikan layanan mereka untuk bisnis apapun.', 'name' => 'Kevin Sanjaya', 'role' => 'Pemilik Bisnis Retail', 'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=200&q=80', 'rating' => 4],
                    ['text' => 'Aplikasi mobile yang mereka kembangkan sangat user-friendly. Pengguna kami memberikan feedback yang sangat positif sejak peluncuran.', 'name' => 'Maya Indah', 'role' => 'Product Manager', 'image' => 'https://images.unsplash.com/photo-1598550874175-4d0ef43741ce?auto=format&fit=crop&w=200&q=80', 'rating' => 5]
                ];
                $allReviews = array_merge($reviews, $reviews); // Duplicate for marquee
            @endphp
            @foreach($allReviews as $idx => $rev)
                <div class="w-[300px] sm:w-[350px] shrink-0 group relative overflow-hidden cursor-pointer rounded-2xl transition-all duration-500 bg-slate-800/40 hover:bg-slate-800/60 backdrop-blur-md border border-white/5 hover:border-purple-500/50 hover:shadow-[0_0_30px_rgba(168,85,247,0.15)] p-6 flex flex-col justify-between">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-30">
                        <!-- Stars -->
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-3.5 h-3.5 {{ $i < $rev['rating'] ? 'text-pink-400' : 'text-slate-600' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>

                        <p class="text-sm text-slate-300 leading-relaxed mb-6">
                            "{{ $rev['text'] }}"
                        </p>
                    </div>

                    <div class="flex items-center gap-4 relative z-30 border-t border-white/10 pt-4 mt-auto">
                        <img src="{{ $rev['image'] }}" alt="{{ $rev['name'] }}" class="w-10 h-10 rounded-full object-cover border border-white/10 group-hover:border-pink-400/50 transition-colors" />
                        <div>
                            <h4 class="font-bebas tracking-wider text-lg text-white">{{ $rev['name'] }}</h4>
                            <p class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400 text-[10px] font-bold uppercase tracking-wider">{{ $rev['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

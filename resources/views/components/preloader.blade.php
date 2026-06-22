<div x-data="{ isLoading: true, isFading: false }"
     x-init="
         document.body.style.overflow = 'hidden';
         setTimeout(() => { isFading = true; }, 1500);
         setTimeout(() => { 
             isLoading = false; 
             document.body.style.overflow = ''; 
         }, 2000);
     "
     x-show="isLoading"
     :class="isFading ? 'opacity-0' : 'opacity-100'"
     class="fixed inset-0 bg-slate-900 z-[9999] flex flex-col items-center justify-center transition-opacity duration-500">
    
    <div class="relative w-24 h-24 mb-8">
        <div class="absolute inset-0 rounded-full border-t-4 border-b-4 border-pink-500 animate-spin"></div>
        <div class="absolute inset-2 rounded-full border-l-4 border-r-4 border-purple-500 animate-[spin_1.5s_linear_infinite_reverse]"></div>
        <div class="absolute inset-4 rounded-full border-t-4 border-b-4 border-blue-500 animate-[spin_2s_linear_infinite]"></div>
    </div>
    
    <h2 class="font-bebas text-3xl tracking-[0.2em] text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 animate-pulse">
        MEMUAT...
    </h2>
</div>

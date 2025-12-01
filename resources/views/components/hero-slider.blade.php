<div class="relative w-full h-[500px] md:h-[600px] overflow-hidden bg-brand-black" x-data="{ 
    activeSlide: 0, 
    slides: [
        {
            image: 'https://cafealtura.cl/cdn/shop/files/Banner_Web_1_1600x.jpg?v=1613586380',
            title: 'CAFE DE ESPECIALIDAD',
            subtitle: 'Tostado fresco en Chile',
            cta: 'COMPRAR AHORA',
            link: '/collections/cafe-en-grano'
        },
        {
            image: 'https://cafealtura.cl/cdn/shop/files/Banner_Web_2_1600x.jpg?v=1613586380',
            title: 'SUSCRIPCIONES',
            subtitle: 'Tu café favorito, siempre a tiempo',
            cta: 'SUSCRIBIRSE',
            link: '/suscripciones'
        }
    ],
    next() {
        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
    },
    prev() {
        this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
    },
    init() {
        setInterval(() => this.next(), 5000);
    }
}">
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
             :class="activeSlide === index ? 'opacity-100 z-10' : 'opacity-0 z-0'">
            <!-- Background Image -->
            <img :src="slide.image" class="w-full h-full object-cover" :alt="slide.title">
            
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30"></div>
            
            <!-- Content -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4">
                <h2 class="font-serif text-4xl md:text-6xl font-bold mb-4 tracking-wide" x-text="slide.title"></h2>
                <p class="font-sans text-lg md:text-xl mb-8 tracking-wider" x-text="slide.subtitle"></p>
                <a :href="slide.link" 
                   class="inline-block border-2 border-white text-white px-8 py-3 text-sm font-bold tracking-widest hover:bg-white hover:text-brand-black transition-colors uppercase">
                    <span x-text="slide.cta"></span>
                </a>
            </div>
        </div>
    </template>

    <!-- Navigation Arrows -->
    <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 text-white hover:text-brand-coffee transition-colors p-2">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
    </button>
    <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 text-white hover:text-brand-coffee transition-colors p-2">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </button>
</div>

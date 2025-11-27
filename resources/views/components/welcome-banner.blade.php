<section class="relative h-[600px] overflow-hidden">
    <!-- Video Background -->
    <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
        <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>

    <!-- Content (Centered) -->
    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8">
        <h1 class="text-6xl md:text-8xl font-heading font-bold text-white uppercase drop-shadow-lg leading-none animate-slide-up-fade">
            ESPECIALISTAS EN ALTURA
        </h1>

        <p class="text-xl text-gray-200 font-body mt-4 mb-8 max-w-2xl animate-slide-up-fade" style="animation-delay: 0.1s;">
            Llevamos el mejor café del mundo directamente a tu taza. Tostado fresco, calidad premium.
        </p>

        <!-- CTA Principal -->
        <a href="/collections/ofertas" 
           class="bg-brand-orange text-white font-heading uppercase tracking-widest px-8 py-4 text-lg hover:bg-white hover:text-brand-orange transition-all duration-300 shadow-xl rounded-sm hover:-translate-y-1 animate-slide-up-fade"
           style="animation-delay: 0.2s;">
            Ver Ofertas
        </a>
    </div>
</section>

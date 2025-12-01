<div>
    <!-- Hero Section (Black Friday) -->
    <!-- Hero Section (Slider) -->
    <x-hero-slider />

    <!-- Visual Navigation (Categories) -->
    <section class="py-16 bg-light" x-data="{ shown: false }" x-intersect.threshold.0.1="shown = true">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-1000 transform"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <h2 class="text-3xl font-display font-bold text-secondary uppercase mb-8 border-l-4 border-primary pl-4">
                Explora por Categoría
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <!-- Large Card 1: Café en Grano -->
                <a href="/collections/cafe-en-grano" class="relative h-64 rounded-lg overflow-hidden group">
                    <img src="/images/bag.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café en Grano">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-white uppercase">Café en Grano</h3>
                            <p class="text-gray-300 text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">La experiencia más fresca</p>
                        </div>
                    </div>
                </a>
                <!-- Large Card 2: Máquinas -->
                <a href="/collections/maquinas" class="relative h-64 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1585503418537-88331351ad99?q=80&w=1000&auto=format&fit=crop" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Máquinas">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-white uppercase">Máquinas</h3>
                            <p class="text-gray-300 text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Equipamiento profesional y hogar</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Small Card 1: Accesorios -->
                <a href="/collections/accesorios" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/accessories.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Accesorios">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md text-center px-2">Accesorios</h3>
                    </div>
                </a>
                <!-- Small Card 2: Cursos -->
                <a href="/collections/cursos-y-talleres" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1556742400-b5b7c5121f99?q=80&w=1000&auto=format&fit=crop" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Cursos y Talleres">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md text-center px-2">Cursos</h3>
                    </div>
                </a>
                <!-- Small Card 3: Chocolates -->
                <a href="/collections/chocolates" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1606312619070-d48b4c652a52?q=80&w=1000&auto=format&fit=crop" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Chocolates">
                    <div class="absolute inset-0 bg-primary/60 group-hover:bg-primary/40 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md text-center px-2">Chocolates</h3>
                    </div>
                </a>
                <!-- Small Card 4: Packs -->
                <a href="/collections/packs" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/promo.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Packs y Ofertas">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md text-center px-2">Packs</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Product Grid (Sale Collection) -->
    @if ($this->saleCollection)
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-end mb-8">
                    <div>
                        <h2 class="text-3xl font-display font-bold text-secondary uppercase border-l-4 border-primary pl-4">
                            {{ $this->saleCollection->translateAttribute('name') }}
                        </h2>
                        <p class="text-gray-500 mt-2 ml-5">
                            {!! $this->saleCollection->translateAttribute('description') !!}
                        </p>
                    </div>
                    <a href="{{ $this->saleCollection->defaultUrl ? route('collection.view', $this->saleCollection->defaultUrl->slug) : '#' }}" class="hidden md:block text-primary font-bold uppercase text-sm hover:text-secondary transition-colors">
                        Ver todo &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-4 md:px-8 max-w-7xl mx-auto">
                    @foreach ($this->saleCollection->products->take(8) as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
                
                <div class="mt-8 text-center md:hidden">
                    <a href="{{ $this->saleCollection->defaultUrl ? route('collection.view', $this->saleCollection->defaultUrl->slug) : '#' }}" class="inline-block bg-transparent border-2 border-brand-dark text-brand-dark uppercase font-heading font-bold px-6 py-2 text-sm hover:bg-brand-dark hover:text-white transition-colors duration-300">
                        Ver todo
                    </a>
                </div>
            </div>
        </section>
    @endif

    <!-- Trust Badges -->
    <x-trust-badges />
</div>

<div>
    <!-- Hero Section (Black Friday) -->
    <x-welcome-banner />

    <!-- Order Tracking Module -->
    <section class="bg-white py-12 border-b border-gray-200">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="font-heading text-3xl text-brand-dark mb-6">RASTREA TU PEDIDO</h2>
            <form class="flex flex-col md:flex-row gap-4">
                <input type="text" placeholder="Número de Orden" class="border-2 border-gray-300 focus:border-brand-dark p-4 w-full font-body rounded-none">
                <input type="email" placeholder="Email" class="border-2 border-gray-300 focus:border-brand-dark p-4 w-full font-body rounded-none">
                <button type="submit" class="bg-brand-dark text-white font-bold px-8 py-4 uppercase hover:bg-brand-orange transition-colors duration-300 whitespace-nowrap">
                    Rastrear
                </button>
            </form>
        </div>
    </section>

    <!-- Visual Navigation (Categories) -->
    <section class="py-16 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-display font-bold text-secondary uppercase mb-8 border-l-4 border-primary pl-4">
                Explora por Categoría
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <!-- Large Card 1 -->
                <a href="/collections/cafe-en-grano" class="relative h-64 rounded-lg overflow-hidden group">
                    <img src="/images/bag.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café en Grano">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-white uppercase">Café en Grano</h3>
                            <p class="text-gray-300 text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">La experiencia más fresca</p>
                        </div>
                    </div>
                </a>
                <!-- Large Card 2 -->
                <a href="/collections/cafe-molido" class="relative h-64 rounded-lg overflow-hidden group">
                    <img src="/images/ground.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café Molido">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-white uppercase">Café Molido</h3>
                            <p class="text-gray-300 text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Listo para preparar</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Small Card 1 -->
                <a href="/collections/capsulas" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/capsules.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Cápsulas">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Cápsulas</h3>
                    </div>
                </a>
                <!-- Small Card 2 -->
                <a href="/collections/accesorios" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/accessories.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Accesorios">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Accesorios</h3>
                    </div>
                </a>
                <!-- Small Card 3 -->
                <a href="/collections/ofertas" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/promo.png" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ofertas">
                    <div class="absolute inset-0 bg-primary/60 group-hover:bg-primary/40 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Ofertas</h3>
                    </div>
                </a>
                <!-- Small Card 4 -->
                <a href="#" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Blog">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Blog</h3>
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

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($this->saleCollection->products->take(8) as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
                
                <div class="mt-8 text-center md:hidden">
                    <a href="{{ $this->saleCollection->defaultUrl ? route('collection.view', $this->saleCollection->defaultUrl->slug) : '#' }}" class="inline-block bg-secondary text-white font-bold py-3 px-8 rounded hover:bg-primary transition-colors uppercase text-sm">
                        Ver todo
                    </a>
                </div>
            </div>
        </section>
    @endif

    <!-- Trust Badges -->
    <x-trust-badges />
</div>

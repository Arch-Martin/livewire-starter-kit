<div>
    <!-- Hero Section (Black Friday) -->
    <section class="relative bg-dark overflow-hidden min-h-[600px] flex items-center">
        <!-- Background Texture/Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-accent to-black opacity-90"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <!-- Hero Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center text-center z-10">
            <span class="inline-block py-1 px-3 rounded bg-primary/20 text-primary border border-primary/30 text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-sm animate-fade-in">
                Ofertas por tiempo limitado
            </span>
            
            <h1 class="text-6xl md:text-8xl font-display font-bold text-white mb-6 uppercase tracking-tighter leading-none animate-slide-up" style="text-shadow: 4px 4px 0px #4A0E76;">
                Black <span class="text-primary">Friday</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mb-10 font-sans font-light animate-slide-up animation-delay-300">
                Precios explosivos en café de especialidad. <br>
                <span class="text-white font-bold">¡No te quedes sin el tuyo!</span>
            </p>
            
            <div class="mb-12 animate-slide-up animation-delay-500">
                <x-countdown />
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 animate-slide-up animation-delay-700">
                <a href="/collections/ofertas" class="inline-block bg-primary text-white font-bold py-4 px-10 rounded hover:bg-white hover:text-primary transition-all duration-300 uppercase tracking-wide shadow-lg shadow-primary/30 transform hover:scale-105">
                    Ver Ofertas
                </a>
                <a href="/collections/cafe-en-grano" class="inline-block bg-transparent border-2 border-white text-white font-bold py-4 px-10 rounded hover:bg-white hover:text-secondary transition-all duration-300 uppercase tracking-wide transform hover:scale-105">
                    Explorar Café
                </a>
            </div>
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
                    <img src="/images/bag.png" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café en Grano">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-white uppercase">Café en Grano</h3>
                            <p class="text-gray-300 text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">La experiencia más fresca</p>
                        </div>
                    </div>
                </a>
                <!-- Large Card 2 -->
                <a href="/collections/cafe-molido" class="relative h-64 rounded-lg overflow-hidden group">
                    <img src="/images/ground.png" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café Molido">
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
                    <img src="/images/capsules.png" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Cápsulas">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Cápsulas</h3>
                    </div>
                </a>
                <!-- Small Card 2 -->
                <a href="/collections/accesorios" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/accessories.png" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Accesorios">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Accesorios</h3>
                    </div>
                </a>
                <!-- Small Card 3 -->
                <a href="/collections/ofertas" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="/images/promo.png" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ofertas">
                    <div class="absolute inset-0 bg-primary/60 group-hover:bg-primary/40 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Ofertas</h3>
                    </div>
                </a>
                <!-- Small Card 4 -->
                <a href="#" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Blog">
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

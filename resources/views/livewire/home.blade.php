<div>
    <!-- Hero Section -->
    <section class="relative bg-secondary overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <!-- Texture overlay or background image -->
            <img src="https://images.unsplash.com/photo-1447933601403-0c60ef7db969?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" class="w-full h-full object-cover" alt="Coffee Texture">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 flex flex-col items-center text-center">
            <span class="inline-block py-1 px-3 rounded bg-primary/20 text-primary border border-primary/30 text-xs font-bold uppercase tracking-widest mb-4 backdrop-blur-sm">
                Mercado Global
            </span>
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white mb-6 uppercase tracking-tighter leading-none">
                ¡Alerta en <br/><span class="text-primary">Mercado Global!</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mb-8 font-light">
                Descubre nuestra selección exclusiva de cafés de origen único. Sabores intensos, aromas inolvidables y la mejor calidad directo a tu hogar.
            </p>
            <div class="flex gap-4">
                <a href="/collections/ofertas" class="inline-block bg-primary text-white font-bold py-4 px-8 rounded hover:bg-white hover:text-primary transition-all duration-300 uppercase tracking-wide shadow-lg shadow-primary/30">
                    Ver Ofertas
                </a>
                <a href="/collections/cafe-en-grano" class="inline-block bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded hover:bg-white hover:text-secondary transition-all duration-300 uppercase tracking-wide">
                    Explorar Café
                </a>
            </div>
        </div>
    </section>

    <!-- Countdown Section (Black Friday Style) -->
    <section class="bg-dark py-12 border-y border-gray-800 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-4xl md:text-6xl font-display font-bold text-white italic tracking-tighter" style="text-shadow: 3px 3px 0px #4A0E76;">
                    BLACK FRIDAY
                </h2>
                <p class="text-accent font-bold uppercase tracking-widest mt-2">Ofertas por tiempo limitado</p>
            </div>
            
            <x-countdown />
            
            <a href="/collections/ofertas" class="inline-block bg-gradient-to-r from-accent to-purple-600 text-white font-bold py-3 px-8 rounded-full hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300 uppercase text-sm tracking-wider">
                Más Información
            </a>
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
                    <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café en Grano">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-2xl font-display font-bold text-white uppercase">Café en Grano</h3>
                            <p class="text-gray-300 text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">La experiencia más fresca</p>
                        </div>
                    </div>
                </a>
                <!-- Large Card 2 -->
                <a href="/collections/cafe-molido" class="relative h-64 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Café Molido">
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
                    <img src="https://images.unsplash.com/photo-1621960166946-b677a2a02d41?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Cápsulas">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Cápsulas</h3>
                    </div>
                </a>
                <!-- Small Card 2 -->
                <a href="/collections/accesorios" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1517080319559-22442aa29a56?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Accesorios">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                        <h3 class="text-xl font-display font-bold text-white uppercase drop-shadow-md">Accesorios</h3>
                    </div>
                </a>
                <!-- Small Card 3 -->
                <a href="/collections/ofertas" class="relative h-48 rounded-lg overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Ofertas">
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
                    <a href="{{ route('collection.view', $this->saleCollection->defaultUrl->slug) }}" class="hidden md:block text-primary font-bold uppercase text-sm hover:text-secondary transition-colors">
                        Ver todo &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($this->saleCollection->products->take(4) as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
                
                <div class="mt-8 text-center md:hidden">
                    <a href="{{ route('collection.view', $this->saleCollection->defaultUrl->slug) }}" class="inline-block bg-secondary text-white font-bold py-3 px-8 rounded hover:bg-primary transition-colors uppercase text-sm">
                        Ver todo
                    </a>
                </div>
            </div>
        </section>
    @endif

    <!-- Trust Badges -->
    <section class="py-12 bg-light border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center mb-4 text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="font-display font-bold text-secondary uppercase mb-1">Calidad Garantizada</h3>
                    <p class="text-xs text-gray-500">Selección premium</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center mb-4 text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-display font-bold text-secondary uppercase mb-1">Envíos Rápidos</h3>
                    <p class="text-xs text-gray-500">A todo Chile</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center mb-4 text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h3 class="font-display font-bold text-secondary uppercase mb-1">Pago Seguro</h3>
                    <p class="text-xs text-gray-500">Transbank y más</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center mb-4 text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="font-display font-bold text-secondary uppercase mb-1">Soporte 24/7</h3>
                    <p class="text-xs text-gray-500">Estamos para ayudarte</p>
                </div>
            </div>
        </div>
    </section>
</div>

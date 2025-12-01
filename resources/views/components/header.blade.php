<header class="sticky top-0 z-50 bg-white shadow-md">
    <!-- Top Row (Utility & Search) -->
    <div class="flex items-center justify-between px-4 py-3 lg:px-8 gap-4">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="/" class="flex items-center gap-2">
                <img src="{{ asset('logo.png') }}" alt="Outlet del Café Logo" class="h-12 w-auto">
                <span class="hidden sm:block font-heading text-2xl font-bold text-brand-dark tracking-tighter uppercase">
                    Outlet del Café
                </span>
            </a>
        </div>

        <!-- Search Bar (Amazon Style) -->
        <div class="flex-1 max-w-2xl mx-auto hidden lg:block">
            <form action="/search" method="GET" class="flex relative">
                <input type="text" name="term" placeholder="Buscar productos, marcas y más..." 
                       class="w-full border-gray-300 rounded-l-full py-2 px-4 focus:ring-brand-orange focus:border-brand-orange font-body text-brand-dark">
                <button type="submit" class="bg-brand-orange text-white rounded-r-full px-6 hover:bg-orange-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </form>
        </div>

        <!-- Icons -->
        <div class="flex items-center gap-6 h-full">
             <a href="#" class="text-brand-dark hover:text-brand-orange transition-colors">
                <span class="sr-only">Cuenta</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </a>
            @livewire('components.cart')
        </div>
    </div>

    <!-- Bottom Row (Navigation) -->
    <div class="bg-brand-dark text-white hidden lg:block">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <nav class="flex space-x-6 py-3 overflow-x-auto">
                <a href="/" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Inicio</a>
                <a href="/collections/cafe-en-grano" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Tienda</a>
                <a href="/cursos" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Cursos y Talleres</a>
                <a href="/cafeterias" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Cafeterías</a>
                <a href="/venta-mayorista" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Venta por Mayor</a>
                <a href="/contacto" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Contacto</a>
                <a href="/collections/chocolates" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Chocolates Gracia</a>
                <a href="/seguimiento" class="font-heading uppercase tracking-wider text-sm hover:text-brand-orange transition-colors whitespace-nowrap">Seguimiento</a>
            </nav>
        </div>
    </div>
    
    <!-- Mobile Search (Visible only on mobile) -->
    <div class="lg:hidden px-4 pb-3 bg-white border-b border-gray-100">
        <form action="/search" method="GET" class="flex relative">
            <input type="text" name="term" placeholder="Buscar..." class="w-full border-gray-300 rounded-l-full py-2 px-4 focus:ring-brand-orange focus:border-brand-orange font-body text-sm">
            <button type="submit" class="bg-brand-orange text-white rounded-r-full px-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
        </form>
    </div>
</header>

<header class="sticky top-0 z-50 bg-white shadow-sm">
    <!-- Top Bar -->
    <div class="bg-black h-[40px] flex items-center justify-between px-4 lg:px-8">
        <div class="flex space-x-6 text-xs text-white uppercase font-sans tracking-wide">
            <a href="#" class="hover:text-primary transition-colors">Café</a>
            <a href="#" class="hover:text-primary transition-colors">Outlet del Té</a>
            <a href="#" class="hover:text-primary transition-colors">Outlet Mayorista</a>
        </div>
        <div class="text-xs text-white font-sans">
            <span>Envíos a todo Chile</span>
        </div>
    </div>

    <!-- Main Header -->
    <div class="flex items-center justify-between px-4 py-4 lg:px-8 bg-white border-b border-gray-100">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="/" class="flex items-center gap-2">
                <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center text-white font-display font-bold text-xl border-2 border-primary">
                    OC
                </div>
                <span class="hidden sm:block font-display text-2xl font-bold text-secondary tracking-tighter uppercase">
                    Outlet del Café
                </span>
            </a>
        </div>

        <!-- Navigation (Desktop) -->
        <nav class="hidden lg:flex space-x-8">
            <a href="/search?term=ofertas" class="text-sm font-bold text-primary uppercase hover:text-secondary transition-colors">Ofertas</a>
            <div class="relative group">
                <button class="flex items-center text-sm font-bold text-secondary uppercase hover:text-primary transition-colors">
                    Tienda
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <!-- Dropdown placeholder -->
                <div class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 hidden group-hover:block border border-gray-100">
                    <a href="/collections/cafe-en-grano" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">Café en Grano</a>
                    <a href="/collections/cafe-molido" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">Café Molido</a>
                    <a href="/collections/capsulas" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">Cápsulas</a>
                    <a href="/collections/accesorios" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">Accesorios</a>
                </div>
            </div>
            <a href="#" class="text-sm font-bold text-secondary uppercase hover:text-primary transition-colors">Regalos</a>
            <a href="#" class="text-sm font-bold text-secondary uppercase hover:text-primary transition-colors">Conócenos</a>
            <a href="#" class="text-sm font-bold text-secondary uppercase hover:text-primary transition-colors">Aprendizaje</a>
            <a href="#" class="text-sm font-bold text-secondary uppercase hover:text-primary transition-colors">Contacto</a>
        </nav>

        <!-- Icons -->
        <div class="flex items-center space-x-6">
            <a href="/search" class="text-secondary hover:text-primary transition-colors">
                <span class="sr-only">Buscar</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </a>
            <a href="#" class="text-secondary hover:text-primary transition-colors">
                <span class="sr-only">Cuenta</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </a>
            @livewire('components.cart')
        </div>
    </div>
</header>

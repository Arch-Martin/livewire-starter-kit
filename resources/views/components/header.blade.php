<header class="sticky top-0 z-50 bg-white shadow-sm font-sans">
    <!-- Main Header Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center gap-2">
                    <!-- Placeholder for Logo Image -->
                    <span class="font-serif text-2xl font-bold text-brand-black tracking-tight">
                        CAFE ALTURA
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex space-x-8">
                <a href="/" class="text-sm font-medium text-brand-black hover:text-brand-coffee transition-colors uppercase tracking-wide">Inicio</a>
                <a href="/collections/cafe-en-grano" class="text-sm font-medium text-brand-black hover:text-brand-coffee transition-colors uppercase tracking-wide">Tienda</a>
                <a href="/suscripciones" class="text-sm font-medium text-brand-black hover:text-brand-coffee transition-colors uppercase tracking-wide">Suscripciones</a>
                <a href="/mayorista" class="text-sm font-medium text-brand-black hover:text-brand-coffee transition-colors uppercase tracking-wide">Mayorista</a>
                <a href="/blog" class="text-sm font-medium text-brand-black hover:text-brand-coffee transition-colors uppercase tracking-wide">Blog</a>
            </nav>

            <!-- Icons -->
            <div class="flex items-center gap-6">
                <!-- Search Icon -->
                <button class="text-brand-black hover:text-brand-coffee transition-colors">
                    <span class="sr-only">Buscar</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>

                <!-- User Icon -->
                <a href="/login" class="text-brand-black hover:text-brand-coffee transition-colors">
                    <span class="sr-only">Cuenta</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </a>

                <!-- Cart -->
                @livewire('components.cart')
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center lg:hidden">
                <button type="button" class="text-brand-black hover:text-brand-coffee p-2">
                    <span class="sr-only">Abrir menú</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </div>
</header>

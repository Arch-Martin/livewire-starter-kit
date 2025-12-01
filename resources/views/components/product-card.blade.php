@props(['product'])

<div class="group relative overflow-hidden bg-white">
    <!-- Badge -->
    <div class="absolute top-2 left-2 bg-brand-coffee text-white font-sans text-xs font-bold px-2 py-1 z-10 uppercase tracking-wider">
        Oferta
    </div>

    <!-- Image -->
    <a href="{{ $product->defaultUrl ? route('product.view', $product->defaultUrl->slug) : '#' }}" wire:navigate class="block overflow-hidden relative aspect-square">
        @if ($product->thumbnail)
            <img class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700 ease-in-out"
                 src="{{ $product->getFirstMediaUrl('images', 'medium') ?: $product->getFirstMediaUrl('images') }}"
                 alt="{{ $product->translateAttribute('name') }}" />
        @else
            <div class="flex items-center justify-center w-full h-full bg-gray-100 text-gray-400">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        @endif
        
        <!-- Quick Action Button -->
        <div class="absolute bottom-0 left-0 w-full bg-brand-black/90 text-white text-center py-3 translate-y-full group-hover:translate-y-0 transition-transform duration-300 font-sans text-sm font-bold uppercase tracking-widest">
            Ver Producto
        </div>
    </a>

    <!-- Info -->
    <div class="p-4 text-center">
        <h3 class="font-serif text-lg text-brand-black mt-2 group-hover:text-brand-coffee transition-colors">
            <a href="{{ $product->defaultUrl ? route('product.view', $product->defaultUrl->slug) : '#' }}" wire:navigate>
                {{ $product->translateAttribute('name') }}
            </a>
        </h3>

        <div class="flex items-center justify-center gap-2 mt-2">
            <x-product-price :product="$product" class="text-brand-black font-sans font-bold" />
        </div>
    </div>
</div>

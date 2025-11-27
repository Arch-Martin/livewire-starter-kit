@props(['product'])

<div class="group relative bg-white border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
    <!-- Badge -->
    <div class="absolute top-0 left-0 bg-brand-orange text-white font-heading text-sm px-3 py-1 z-10">
        OFERTA
    </div>

    <!-- Image -->
    <a href="{{ $product->defaultUrl ? route('product.view', $product->defaultUrl->slug) : '#' }}" wire:navigate class="block overflow-hidden relative aspect-square">
        @if ($product->thumbnail)
            <img class="object-cover w-full h-full transition-transform duration-500 ease-out group-hover:scale-105"
                 src="{{ $product->getFirstMediaUrl('images', 'medium') ?: $product->getFirstMediaUrl('images') }}"
                 alt="{{ $product->translateAttribute('name') }}" />
        @else
            <div class="flex items-center justify-center w-full h-full bg-gray-100 text-gray-400">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        @endif
        
        <!-- Quick Action Button -->
        <div class="opacity-0 group-hover:opacity-100 transition-opacity absolute bottom-20 left-0 right-0 mx-auto w-10/12 bg-white/90 backdrop-blur text-black font-bold py-2 shadow-lg text-center cursor-pointer">
            VISTA RÁPIDA
        </div>
    </a>

    <!-- Info -->
    <div class="p-4">
        <h3 class="font-heading text-lg text-brand-dark truncate mt-4">
            <a href="{{ $product->defaultUrl ? route('product.view', $product->defaultUrl->slug) : '#' }}" wire:navigate>
                {{ $product->translateAttribute('name') }}
            </a>
        </h3>

        <div class="flex items-baseline mt-2">
            <x-product-price :product="$product" class="text-2xl font-bold text-brand-dark" />
            <span class="text-sm text-gray-400 line-through ml-2">$12.990</span>
        </div>
    </div>
</div>

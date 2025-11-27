@props(['product'])

<div class="group relative bg-white border border-gray-100 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <!-- Badge -->
    <div class="absolute top-0 left-0 z-10">
        <span class="bg-primary text-white text-xs font-bold px-3 py-1 rounded-br-lg uppercase tracking-wider">
            Oferta
        </span>
    </div>

    <!-- Image -->
    <a href="{{ route('product.view', $product->defaultUrl->slug) }}" wire:navigate class="block aspect-w-1 aspect-h-1 bg-gray-100 overflow-hidden">
        @if ($product->thumbnail)
            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110"
                 src="{{ $product->thumbnail->getUrl('medium') }}"
                 alt="{{ $product->translateAttribute('name') }}" />
        @else
            <div class="flex items-center justify-center w-full h-full bg-gray-100 text-gray-400">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        @endif
        
        <!-- Quick Add Button (Visible on Hover) -->
        <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
            <button class="w-full bg-secondary text-white font-bold py-2 rounded shadow-lg hover:bg-primary transition-colors flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Ver Detalles
            </button>
        </div>
    </a>

    <!-- Info -->
    <div class="p-4">
        <h3 class="text-sm font-bold text-gray-900 line-clamp-2 min-h-[40px] mb-2 font-display uppercase tracking-wide">
            <a href="{{ route('product.view', $product->defaultUrl->slug) }}" wire:navigate>
                {{ $product->translateAttribute('name') }}
            </a>
        </h3>

        <div class="flex items-end gap-2 mb-1">
            <x-product-price :product="$product" class="text-lg font-black text-secondary font-mono" />
            <!-- Placeholder for old price if available in future -->
            <!-- <span class="text-sm text-gray-400 line-through font-mono">$12.990</span> -->
        </div>
        
        <div class="flex justify-between items-center mt-2">
             <span class="text-xs text-gray-500">
                SKU: {{ $product->variants->first()?->sku }}
             </span>
             <!-- Savings Badge Placeholder -->
             <!-- <span class="text-xs font-bold text-green-600">Ahorra 20%</span> -->
        </div>
    </div>
</div>

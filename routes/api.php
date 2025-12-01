<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lunar\Models\Product;
use Lunar\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Lunar\Models\Order;
use Lunar\Models\OrderLine;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/products', function () {
    // Fetch products with their variants and prices
    // This is a simplified example. You might need to adjust based on Lunar's structure
    return Product::where('status', 'published')
        ->with(['variants.prices', 'thumbnail'])
        ->get()
        ->map(function ($product) {
            $variant = $product->variants->first();
            $price = $variant ? $variant->prices->first() : null;
            
            return [
                'id' => $product->id,
                'name' => $product->translateAttribute('name'),
                'price' => $price ? $price->price->value : 0,
                'image' => $product->thumbnail ? $product->thumbnail->getUrl() : 'https://placehold.co/600x600',
                'description' => $product->translateAttribute('description'),
                // Add logic for originalPrice/discount if available
            ];
        });
});

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return response()->json(['user' => Auth::user()], 200);
    }

    return response()->json(['message' => 'Invalid credentials'], 401);
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return response()->json(['message' => 'Logged out'], 200);
});

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/orders', function (Request $request) {
        $data = $request->validate([
            'items' => 'required|array',
            'total' => 'required|numeric',
        ]);

        $channel = \Lunar\Models\Channel::getDefault();
        $currency = \Lunar\Models\Currency::getDefault();

        $order = Order::create([
            'channel_id' => $channel->id,
            'status' => 'awaiting-payment',
            'reference' => 'ORD-' . strtoupper(uniqid()),
            'sub_total' => $data['total'], // Simplified: assuming total is subtotal for now
            'total' => $data['total'],
            'tax_total' => 0,
            'currency_code' => $currency->code,
            'placed_at' => now(),
        ]);

        foreach ($data['items'] as $item) {
            // Find the variant to get the product details
            // In a real app, you'd validate prices here
            $order->lines()->create([
                'purchasable_type' => \Lunar\Models\ProductVariant::class,
                'purchasable_id' => $item['id'], // Assuming item['id'] is the variant ID (or product ID if simple)
                'type' => 'physical',
                'description' => $item['name'],
                'option' => $item['grind'] ?? null,
                'identifier' => $item['id'],
                'unit_price' => $item['price'],
                'unit_quantity' => $item['quantity'],
                'quantity' => $item['quantity'],
                'sub_total' => $item['price'] * $item['quantity'],
                'total' => $item['price'] * $item['quantity'],
                'tax_total' => 0,
            ]);
        }
        
        return response()->json([
            'id' => $order->reference,
            'date' => $order->placed_at->format('d/m/Y'),
            'items' => $data['items'],
            'total' => $order->total,
            'status' => 'Pendiente'
        ], 201);
    });
});

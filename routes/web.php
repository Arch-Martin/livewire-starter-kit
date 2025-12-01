<?php

use App\Livewire\CheckoutPage;
use App\Livewire\CheckoutSuccessPage;
use App\Livewire\CollectionPage;
use App\Livewire\Home;
use App\Livewire\ProductPage;
use App\Livewire\SearchPage;
use App\Livewire\CursosPage;
use App\Livewire\CafeteriasPage;
use App\Livewire\WholesalePage;
use App\Livewire\ContactPage;
use App\Livewire\OrderTrackingPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');
Route::get('/products/{slug}', ProductPage::class)->name('product.view');
Route::get('search', SearchPage::class)->name('search.view');
Route::get('checkout', CheckoutPage::class)->name('checkout.view');
Route::get('checkout/success', CheckoutSuccessPage::class)->name('checkout-success.view');

Route::get('/cursos', CursosPage::class)->name('cursos');
Route::get('/cafeterias', CafeteriasPage::class)->name('cafeterias');
Route::get('/venta-mayorista', WholesalePage::class)->name('wholesale');
Route::get('/contacto', ContactPage::class)->name('contact');
Route::get('/seguimiento', OrderTrackingPage::class)->name('order-tracking');

Route::view('terminos-y-condiciones', 'pages.terms')->name('terms');
Route::view('politica-de-privacidad', 'pages.privacy')->name('privacy');
Route::view('derecho-a-retracto', 'pages.refund')->name('refund');
Route::view('despacho', 'pages.shipping')->name('shipping');



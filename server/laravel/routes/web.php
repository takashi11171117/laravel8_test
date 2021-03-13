<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductDownloadController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/products/{product:slug}', [ProductController::class, 'show'])
    ->name('products.show');

    Route::get('/products/downloads/{product:slug}', [ProductDownloadController::class, 'show'])
        ->name('products.downloads.show');

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

    Route::get('/checkout', [CheckoutController::class, 'index'])
        ->name('checkout.index');

Route::post('/stripe/webhook', [WebhookController::class, 'handleWebhook']);

Route::get('/orders', [OrderController::class, 'index'])
    ->name('orders.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/articles/{article:slug}', ArticleController::class);
Route::get('/episodes/{episode:slug}', EpisodeController::class);

require __DIR__.'/auth.php';

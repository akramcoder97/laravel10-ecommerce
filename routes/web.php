<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;    // --- added
use App\Http\Controllers\AdminController;     // --- added
use App\Http\Controllers\ShopController;   // --- added
use App\Http\Controllers\CartController;   // --- added
use App\Http\Controllers\WishlistController;   // --- added
use App\Http\Controllers\Auth\LoginController;   // --- added
use App\Http\Controllers\CheckoutController;   // --- added

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetail'])->name('shop.product.details');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('cart/store',[CartController::class,'addToCart'])->name('cart.store');
Route::put('/cart/update',[CartController::class,'updateCart'])->name('cart.update');
Route::delete('/cart/remove',[CartController::class,'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'clearCart'])->name('cart.clear');
Route::post('/wishlist/add',[WishlistController::class,'addProductToWishlist'])->name('wishlist.store');
Route::get('cart-wishlist-count',[ShopController::class,'getCartAndWishlistCount'])->name('shop.cart.wihslist.count');
Route::get('/wishlist',[WishlistController::class,'getWishlistedProducts'])->name('wishlist.list');
Route::get('/wishlist/remove',[WishlistController::class,'removeProductFromWishlist'])->name('wishlist.remove');
Route::get('/wishlist/clear',[WishlistController::class,'clearWishlist'])->name('wishlist.clear');
Route::post('/wishlist/move-to-cart',[WishlistController::class,'moveToCart'])->name('wishlist.move.to.cart');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');
Route::post('/placeorder',[CheckoutController::class,'placeOrder'])->name('place.order');


/* ----Auth----- */
Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/produits',[AdminController::class,'productsIndex'])->name('admin.produits.index');
    Route::post('/admin/produits',[AdminController::class,'addNewProduct'])->name('admin.produits.add');
    Route::post('/admin/produits/update',[AdminController::class,'updateProduct'])->name('admin.produits.update');
    Route::delete('/admin/produits/delete/{id}',[AdminController::class,'deleteProduct'])->name('admin.produits.delete');
    Route::get('/admin/orders',[AdminController::class,'ordersIndex'])->name('admin.orders.index');

});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/shop_details', [MainController::class, 'shop_details'])->name('shop_details');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog_details', [MainController::class, 'blog_details'])->name('blog_details');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/change/password', [AdminController::class, 'changePassword']);
Route::post('/change/password', [AdminController::class, 'changePasswordCheck']);


Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
// Route for viewing the cart
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.index');

// Route for updating cart items
Route::post('/update-cart-item', [CartController::class, 'updateCartItem'])->name('cart.update');

// Route for deleting cart items
Route::get('/cart/delete/{rowId}', [CartController::class, 'deleteCartItem'])->name('cart.delete');


Route::middleware(['checkAdmin:admin', 'auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('discounts', DiscountController::class);
    });
});


Route::get('/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
})->where('lang', 'en|ru|uz');

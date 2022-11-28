<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {

//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);


//About Page
Route::get('/about', function(){
    return view('about');
});

//Furnitures Page
// Route::get('/furniture', function(){
//     return view('furniture');
// });
Route::get('/furniture', [ProductController::class, 'index']);

//Blog Page
// Route::get('/blog', function(){
//     return view('blog');
// });

Route::get('blog', [BlogController::class, 'index']);

//Contact Us Page
Route::get('/contact', function(){
    return view('contact');
});


Route::controller(UserController::class)->group(function(){

    Auth::routes([
        'verfiy' =>true
    ]);

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('user.validate_registration');

    Route::post('validate_login', 'validate_login')->name('user.validate_login');

    Route::get('/', [HomeController::class, 'index']);

});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){

   Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

   Route::get('blog', [App\Http\Controllers\Admin\BlogController::class, 'index']);

   Route::get('add-blog', [App\Http\Controllers\Admin\BlogController::class, 'create']);

   Route::post('add-blog', [App\Http\Controllers\Admin\BlogController::class, 'store']);

   Route::get('edit-blog/{blog_id}', [App\Http\Controllers\Admin\BlogController::class, 'edit']);

   Route::put('update-blog/{blog_id}', [App\Http\Controllers\Admin\BlogController::class, 'update']);

   Route::get('delete-blog/{blog_id}', [App\Http\Controllers\Admin\BlogController::class, 'delete']);

   //Product

   Route::get('product', [App\Http\Controllers\Admin\ProductController::class, 'index']);

   Route::get('add-product', [App\Http\Controllers\Admin\ProductController::class, 'create']);

   Route::post('add-product', [App\Http\Controllers\Admin\ProductController::class, 'store']);

   Route::get('edit-product/{product_id}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);

   Route::put('update-product/{product_id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);

   Route::get('delete-product/{product_id}', [App\Http\Controllers\Admin\ProductController::class, 'delete']);

   Route::get('/order', [\App\Http\Controllers\Admin\DashboardController::class, 'order']);

   Route::get('/search', [\App\Http\Controllers\Admin\DashboardController::class, 'searchdata']);

   Route::get('/delivered/{id}', [\App\Http\Controllers\Admin\DashboardController::class, 'delivered']);

   Route::get('/printpdf/{id}', [\App\Http\Controllers\Admin\DashboardController::class, 'printpdf']);

   Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard']);

});

Route::post('add-cart/{product_id}', [ProductController::class, 'add_cart']);

Route::get('show_cart', [ProductController::class, 'show_cart']);

Route::get('show_order', [ProductController::class, 'show_order']);

Route::get('cart_count', [ProductController::class, 'cart_count']);

Route::get('cancel_order/{id}', [ProductController::class, 'cancel_order']);

Route::get('remove_cart/{cart_id}', [ProductController::class, 'remove_cart']);

Route::get('cash_order', [ProductController::class, 'cash_order']);

Route::get('stripe/{totalprice}', [ProductController::class, 'stripe']);

Route::post('stripe/{totalprice}',[ProductController::class, 'stripePost'])->name('stripe.post');


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

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

//===============================laravel page=====================================
// Route::get('/', function () {
//     return view('welcome');
// });
//=======================================frontend=======================================

Route::get('/', [App\Http\Controllers\frontend\IndexController::class, 'index'])->name('frontend.index');
Route::get('/about', [App\Http\Controllers\frontend\IndexController::class, 'about'])->name('frontend.about');
Route::get('/product', [App\Http\Controllers\frontend\IndexController::class, 'product'])->name('frontend.product');
Route::get('/gallery', [App\Http\Controllers\frontend\IndexController::class, 'gallery'])->name('frontend.gallery');
Route::get('/services', [App\Http\Controllers\frontend\IndexController::class, 'services'])->name('frontend.services');
Route::get('/contact', [App\Http\Controllers\frontend\IndexController::class, 'contact'])->name('frontend.contact');
Route::get('/singleproduct', [App\Http\Controllers\frontend\IndexController::class, 'singleproduct'])->name('frontend.singleproduct');
Route::get('/management', [App\Http\Controllers\frontend\IndexController::class, 'management'])->name('frontend.management');


//==============================Login And Register ===========================
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//=======================================admin=======================================

Route::group(['namespace' => 'admin','prefix'=>'farmer-admin', 'middleware' => ['auth', 'verified']], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('index', [App\Http\Controllers\admin\AdminController::class,'index'])->name('admin.index');
});

// ==========================Slider crud=================================
Route::get('/add-slider', [App\Http\Controllers\admin\SliderController::class,'create'])->name('add-slider');
Route::post('/store-slider', [App\Http\Controllers\admin\SliderController::class,'store'])->name('store-slider');
Route::get('/slider-index', [App\Http\Controllers\admin\SliderController::class,'index'])->name('slider-index');
Route::get('/edit-slider/{id}', [App\Http\Controllers\admin\SliderController::class,'edit'])->name('edit-slider');
Route::post('/update-slider/{id}', [App\Http\Controllers\admin\SliderController::class,'update'])->name('update-slider');
Route::delete('/delete-slider/{id}', [App\Http\Controllers\admin\SliderController::class,'destroy'])->name('destroy-slider');

// ==========================About crud=================================
Route::get('/add-about', [App\Http\Controllers\admin\AboutController::class,'create'])->name('add-about');
Route::post('/store-about', [App\Http\Controllers\admin\AboutController::class,'store'])->name('store-about');
Route::get('/about-index', [App\Http\Controllers\admin\AboutController::class,'index'])->name('about-index');
Route::get('/edit-about/{id}', [App\Http\Controllers\admin\AboutController::class,'edit'])->name('edit-about');
Route::post('/update-about/{id}', [App\Http\Controllers\admin\AboutController::class,'update'])->name('update-about');
Route::delete('/delete-about/{id}', [App\Http\Controllers\admin\AboutController::class,'destroy'])->name('destroy-about');

// ==========================Gallery crud=================================
Route::get('/add-gallery', [App\Http\Controllers\admin\GalleryController::class,'create'])->name('add-gallery');
Route::post('/store-gallery', [App\Http\Controllers\admin\GalleryController::class,'store'])->name('store-gallery');
Route::get('/gallery-index', [App\Http\Controllers\admin\GalleryController::class,'index'])->name('gallery-index');
Route::get('/edit-gallery/{id}', [App\Http\Controllers\admin\GalleryController::class,'edit'])->name('edit-gallery');
Route::post('/update-gallery/{id}', [App\Http\Controllers\admin\GalleryController::class,'update'])->name('update-gallery');
Route::delete('/delete-gallery/{id}', [App\Http\Controllers\admin\GalleryController::class,'destroy'])->name('destroy-gallery');

// ==========================Product crud=================================
Route::get('/add-product', [App\Http\Controllers\admin\ProductController::class,'create'])->name('add-product');
Route::post('/store-product', [App\Http\Controllers\admin\ProductController::class,'store'])->name('store-product');
Route::get('/product-index', [App\Http\Controllers\admin\ProductController::class,'index'])->name('product-index');
Route::get('/edit-product/{id}', [App\Http\Controllers\admin\ProductController::class,'edit'])->name('edit-product');
Route::post('/update-product/{id}', [App\Http\Controllers\admin\ProductController::class,'update'])->name('update-product');
Route::delete('/delete-product/{id}', [App\Http\Controllers\admin\ProductController::class,'destroy'])->name('destroy-product');


// ==========================SingleProduct crud=================================
Route::get('/add-singleproduct', [App\Http\Controllers\admin\SingleproductController::class,'create'])->name('add-singleproduct');
Route::post('/store-singleproduct', [App\Http\Controllers\admin\SingleproductController::class,'store'])->name('store-singleproduct');
Route::get('/singleproduct-index', [App\Http\Controllers\admin\SingleproductController::class,'index'])->name('singleproduct-index');
Route::get('/edit-singleproduct/{id}', [App\Http\Controllers\admin\SingleproductController::class,'edit'])->name('edit-singleproduct');
Route::post('/update-singleproduct/{id}', [App\Http\Controllers\admin\SingleproductController::class,'update'])->name('update-singleproduct');
Route::delete('/delete-singleproduct/{id}', [App\Http\Controllers\admin\SingleproductController::class,'destroy'])->name('destroy-singleproduct');

// ==========================Contactusdetales crud=================================
Route::get('/add-contactusdetales', [App\Http\Controllers\admin\ContactusdetalesController::class,'create'])->name('add-contactusdetales');
Route::post('/store-contactusdetales', [App\Http\Controllers\admin\ContactusdetalesController::class,'store'])->name('store-contactusdetales');
Route::get('/contactusdetales-index', [App\Http\Controllers\admin\ContactusdetalesController::class,'index'])->name('contactusdetales-index');
Route::get('/edit-contactusdetales/{id}', [App\Http\Controllers\admin\ContactusdetalesController::class,'edit'])->name('edit-contactusdetales');
Route::post('/update-contactusdetales/{id}', [App\Http\Controllers\admin\ContactusdetalesController::class,'update'])->name('update-contactusdetales');
Route::delete('/delete-contactusdetales/{id}', [App\Http\Controllers\admin\ContactusdetalesController::class,'destroy'])->name('destroy-contactusdetales');

// ==========================Services crud=================================
Route::get('/add-services', [App\Http\Controllers\admin\ServicesController::class,'create'])->name('add-services');
Route::post('/store-services', [App\Http\Controllers\admin\ServicesController::class,'store'])->name('store-services');
Route::get('/services-index', [App\Http\Controllers\admin\ServicesController::class,'index'])->name('services-index');
Route::get('/edit-services/{id}', [App\Http\Controllers\admin\ServicesController::class,'edit'])->name('edit-services');
Route::post('/update-services/{id}', [App\Http\Controllers\admin\ServicesController::class,'update'])->name('update-services');
Route::delete('/delete-services/{id}', [App\Http\Controllers\admin\ServicesController::class,'destroy'])->name('destroy-services');


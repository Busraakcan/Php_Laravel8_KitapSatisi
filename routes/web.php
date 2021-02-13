<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name( 'home');
Route::get('/home', [HomeController::class, 'index'])->name( 'homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name( 'aboutus');
Route::get('/fag', [HomeController::class, 'fag'])->name( 'fag');
Route::get('/referances', [HomeController::class, 'referances'])->name( 'referances');
Route::get('/sendmessage', [HomeController::class, 'sendmessage'])->name( 'sendmessage');
Route::get('/product/{id}/', [\App\Http\Controllers\ProductController::class, 'detail'])->name( 'productDetail');
Route::get('/category-products/{id}', [HomeController::class, 'categoryProducts'])->name( 'categoryProducts');
Route::get('/contact', [HomeController::class, 'contact'])->name( 'contact');
Route::post('/new-product-comment', [\App\Http\Controllers\ProductController::class, 'makeComment'])->name( 'makeComment');
Route::get('/delete-product-comment/{id}', [\App\Http\Controllers\ProductController::class, 'deleteComment'])->name( 'deleteComment');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=> '[0-9]+', 'name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name( 'test');


Route::get('/shopping-card', [\App\Http\Controllers\ShoppingCartController::class, 'index'])->name( 'shoppingCartView');
Route::post('/add-shoppingcart/{id}', [\App\Http\Controllers\ShoppingCartController::class, 'store'])->name( 'addToShoppingCart');
Route::get('/remove-product-shoppingcart/{id}', [\App\Http\Controllers\ShoppingCartController::class, 'removeProduct'])->name( 'removeProductShoppingCart');
//Admin

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/home', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_home');
    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');


    #Product
    Route::prefix('product')->group(function(){
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_product');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin_product_show');
    });

    Route::prefix('comments')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\ProductCommentController::class,'index'])->name('admin_comment');
        Route::get('validate/{id}',[\App\Http\Controllers\Admin\ProductCommentController::class,'validateComment'])->name('admin_comment_validate');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ProductCommentController::class,'destroy'])->name('admin_comment_delete');
    });
    #Product Image Gallery
    Route::prefix('image')->group(function(){
        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });
    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update/', [\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

});

//user
#Product Image Gallery
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/', [UserController::class,'index'])->name('myprofile');
    Route::get('comments', [UserController::class,'userComments'])->name('userComments');

});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function(){
    Route::get('/profile', [UserController::class,'index'])->name('userprofile');

});



//Product

Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name( 'adminhome')->middleware('auth');
//adminlogin
Route::get('/admin/login', [\App\Http\Controllers\Admin\HomeController::class, 'login'])->name( 'adminlogin');
//logincheck
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name( 'logincheck');

//admin admin_logout
Route::get('/logout', [\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name( 'logout');



    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

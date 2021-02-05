<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home')->name( 'anasayfa');

Route::get('/', function () {
    return view('home.index');
});//Bir dosyaya giriyorsa

Route::get('/home', [HomeController::class, 'index'])->name( 'home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name( 'aboutus');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=> '[0-9]+', 'name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name( 'test');

//Admin

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/home', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
});








Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name( 'adminhome')->middleware('auth');
//adminlogin
Route::get('/admin/login', [\App\Http\Controllers\Admin\HomeController::class, 'login'])->name( 'adminlogin');
//logincheck
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name( 'logincheck');

//admin admin_logout
Route::get('/admin/logaout', [\App\Http\Controllers\Admin\HomeController::class, 'logaout'])->name( 'admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

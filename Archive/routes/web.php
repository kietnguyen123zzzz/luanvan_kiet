<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test-route', function () {
    return "Xin chao cac ban";
});

Route::get('/admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
Route::get('/admin/categories/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
Route::get('/admin/categories/{category_id}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::get('/admin/categories/{category_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'show']);
Route::post('/admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::put('/admin/categories/{category_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::DELETE('/admin/categories/{category_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);



Route::get('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
Route::get('/admin/products/create', [\App\Http\Controllers\Admin\ProductController::class, 'create']);
Route::get('/admin/products/{product}/edit', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
Route::get('/admin/products/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'show']);
Route::post('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'store']);
Route::put('/admin/products/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
Route::delete('/admin/products/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);


Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get('/admin/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create']);
Route::get('/admin/users/{user_id}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::get('/admin/users/{user_id}', [\App\Http\Controllers\Admin\UserController::class, 'show']);
Route::post('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'store']);
Route::put('/admin/users/{user_id}', [\App\Http\Controllers\Admin\UserController::class, 'update']);
Route::delete('/admin/users/{user_id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy']);


Route::get('/admin/orders', [\App\Http\Controllers\Admin\OrderController::class, 'index']);
Route::get('/admin/orders/create', [\App\Http\Controllers\Admin\OrderController::class, 'create']);
Route::get('/admin/orders/{order_id}/edit', [\App\Http\Controllers\Admin\OrderController::class, 'edit']);
Route::get('/admin/orders/{order_id}', [\App\Http\Controllers\Admin\OrderController::class, 'show']);
Route::post('/admin/orders', [\App\Http\Controllers\Admin\OrderController::class, 'store']);
Route::put('/admin/orders/{order_id}', [\App\Http\Controllers\Admin\OrderController::class, 'update']);
Route::delete('/admin/orders/{order_id}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy']);
Route::post('/cart_add/{product}', [\App\Http\Controllers\Home\CartController::class, 'add']);
Route::post('/checkout', [\App\Http\Controllers\Home\CartController::class, 'checkout']);

Route::get('/logintest', [\App\Http\Controllers\Auth\TestController::class, 'check']);


Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'index']);
Route::get('/product', [\App\Http\Controllers\Home\ProductController::class, 'show']);
Route::get('/product/detail/{product}', [\App\Http\Controllers\Home\ProductController::class, 'detail']);
Route::get('/cart', [\App\Http\Controllers\Home\CartController::class, 'show']);
Route::get('/gioithieu', [\App\Http\Controllers\Home\GioithieuController::class, 'show']);
Route::get('/lienhe', [\App\Http\Controllers\Home\LienheController::class, 'show']);
Route::get('/dangnhaphoivien', [\App\Http\Controllers\Home\DangnhaphoivienController::class, 'show']);
Route::get('/dangky', [\App\Http\Controllers\Home\DangkyController::class, 'show']);
Route::get('/doimatkhau', [\App\Http\Controllers\Home\DoimatkhauController::class, 'show']);


Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);

Route::post('/cart_add/{product}', [\App\Http\Controllers\Home\CartController::class, 'add']);
Route::post('/checkout', [\App\Http\Controllers\Home\CartController::class, 'checkout']);
Route::delete('/cart_delete', [\App\Http\Controllers\Home\CartController::class, 'destroy']);
Route::post('/update', [\App\Http\Controllers\Home\CartController::class, 'update']);
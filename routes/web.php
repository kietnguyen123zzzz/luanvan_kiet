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
Route::get('/admin/categories/{id}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::get('/admin/categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'show']);
Route::post('/admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::put('/admin/categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::DELETE('/admin/categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);



Route::get('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
Route::get('/admin/products/create', [\App\Http\Controllers\Admin\ProductController::class, 'create']);
Route::get('/admin/products/{id}/edit', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
Route::get('/admin/products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'show']);
Route::post('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'store']);
Route::put('/admin/products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
Route::delete('/admin/products/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);

Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get('/admin/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create']);
Route::get('/admin/users/{id}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::get('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show']);
Route::post('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'store']);
Route::put('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update']);
Route::delete('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy']);


Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'index']);
Route::get('/product/detail', [\App\Http\Controllers\Home\ProductController::class, 'show']);


<?php

use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('product/create', [ProductController::class,'create'])->name('product.create');
Route::post('product/store', [ProductController::class,'store'])->name('product.store');
Route::get('product/{product_need_to_edit}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('product/{product_need_to_be_updated}/update', [ProductController::class,'update'])->name('product.update');
Route::delete('product/{id_of_deleted_product}/delete', [ProductController::class,'delete'])->name('product.delete');
<?php

use App\Http\Controllers\usercontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/edit', function () {
    return view('edit');
});

Route::view('crud','main');
Route::get('/crud',[usercontroller::class,'show']);
Route::post('/crud',[usercontroller::class,'addData']);
Route::get('/delete/{id}',[usercontroller::class,'delete']);
Route::get('/edit/{id}',[usercontroller::class,'edit']);
Route::post('/update',[usercontroller::class,'update']);
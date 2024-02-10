<?php

use App\Http\Controllers\Controller;
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

Route::get('/',[Controller::class,'home']);
Route::get('/about',[Controller::class,'about']);
Route::get('/contact',[Controller::class,'contact']);
Route::get('/products',[Controller::class,'products']);
Route::get('/product',[Controller::class,'product']);
Route::get('/auth',[Controller::class,'auth']);
Route::get('/cart',[Controller::class,'cart']);
Route::get('/user',[Controller::class,'user']);
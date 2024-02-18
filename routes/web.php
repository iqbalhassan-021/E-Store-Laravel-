<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/',[Controller::class,'home']);
Route::get('/about',[Controller::class,'about']);
Route::get('/contact',[Controller::class,'contact']);
Route::get('/products',[Controller::class,'products']);
Route::get('/product',[Controller::class,'product']);
Route::get('/auth',[Controller::class,'auth']);
Route::get('/cart',[Controller::class,'cart']);
Route::get('/user',[Controller::class,'user']);
Route::get('/admin',[Controller::class,'admin']);
Route::get('/redirect',[Controller::class,'redirect']);
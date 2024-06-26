<?php

use App\Http\Controllers\TamuController;
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
    return view('front.home');
});


Route::get('/back/portofolio',[TamuController::class,'index']);
Route::get('/back/portofolio/delete/{id}',[TamuController::class,'destroy']);
Route::match(['get','post'],'/back/portofolio/update/{id}',[TamuController::class,'update']);

Route::match(['get','post'],'/',[TamuController::class,'store']);
Route::get('/welcome', function () {
    return view('welcome');
});
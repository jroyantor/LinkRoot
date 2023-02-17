<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\LinkController;
use App\http\Controllers\VisitController;
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

Auth::routes();
//route for user visit count

Route::post('/visit/{link}',[VisitController::class,'store']);

// /username
Route::get('/{user}',[UserController::class,'show']);

// /dashboard

Route::group(['middleware'=>'auth','prefix'=>'dashboard'], function(){

    Route::get('/links',[LinkController::class,'index']);
    Route::get('/links/new',[LinkController::class,'create']);
    Route::post('links/new',[LinkController::class,'store']);

    Route::get('/links/{link}',[LinkController::class,'edit']);
    Route::post('/links/{link}',[LinkController::class,'update']);
    Route::delete('/links/{link}',[LinkController::class,'destroy']);
    
    Route::get('/settings',[UserController::class,'edit']);
    Route::post('/settings',[UserController::class,'update']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

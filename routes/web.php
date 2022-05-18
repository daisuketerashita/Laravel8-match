<?php

use App\Http\Controllers\UserController;
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

Route::group([
    'prefix' => 'users',
    'middleware' => 'auth'
],function(){
    Route::get('show/{id}',[UserController::class,'show'])->name('users.show');
    Route::get('edit/{id}',[UserController::class,'edit'])->name('users.edit');
    Route::post('update/{id}',[UserController::class,'update'])->name('users.update');
});

Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

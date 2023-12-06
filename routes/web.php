<?php

use App\Http\Controllers\Testingcontroller;
use App\Http\Controllers\UserController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/user',[UserController::class,'userInfo'])->name('user');
Route::get('/datapass/{id}',[UserController::class,'passData']);
Route::get('/blog',[UserController::class,'blogFunck'])->name('blog');

 */
Route::controller(UserController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/user','userInfo')->name('user');
    Route::get('/datapass/{id}','passData');
    Route::get('/blog','blogFunck')->name('blog');
}) ;
Route::get('/test',Testingcontroller::class)->name('test');

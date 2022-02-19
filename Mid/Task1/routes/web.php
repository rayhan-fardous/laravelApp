<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studentController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/',[PagesController::class,'show']);
Route::get('/', [PagesController::class, 'index']);

Route::get('/contacts', [PagesController::class, 'contacts']);
Route::get('/adminHome', [adminController::class, 'adminHome']);
Route::get('/studentHome', [studentController::class, 'studentHome']);
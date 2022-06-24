<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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
    return redirect('dashboard');
});

//Dashboard Routes
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

//Login Routes
Route::get('login', [AuthController::class, 'GetLogin'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 

//Registration Routes
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 

//Logout Routes
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//Add or Create Product
Route::get('add-product',[ProductController::class, 'create'])->name('add-product');
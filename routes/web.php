<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

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

    
   
    
        

    //Login Routes
    Route::get('login', [AuthController::class, 'GetLogin'])->name('login')->middleware('prevent-back-history');
    Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom')->middleware('prevent-back-history'); 

    //Registration Routes
    Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 

    //Logout Routes
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

   
        //Dashboard Routes
        Route::get('dashboard', [ProductController::class, 'dashboard'])->name('dashboard')->middleware('prevent-back-history');

        //Add or Create Product
        Route::get('add-product',[ProductController::class, 'create'])->name('add-product');
        Route::post('product_created',[ProductController::class, 'createProduct'])->name('product_created');

        //View Product
        Route::get('/view_products',[ProductController::class, 'viewDetails'])->name('view_products');

        //Delete Product
        Route::delete('/delete_product/{id}',[ProductController::class, 'destroy'])->name('delete_product');

        //Search Product
        Route::any('search',[ProductController::class, 'search'])->name('search');

        //Edit Product
        Route::get('/edit_product/{id?}',[ProductController::class, 'edit'])->name('edit_product');

        //Update Product Data
        Route::post('update_product/{id}',[ProductController::class, 'update'])->name('update_product');

        //Update Product Data
        Route::get('/edit_user/{id}',[AuthController::class, 'editUser'])->name('edit_user');
        Route::post('update_profile/{id?}',[AuthController::class, 'updateProfile'])->name('update_profile');

    
    

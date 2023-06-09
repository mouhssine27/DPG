<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;

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

Route::prefix('Client')->group(function(){
    Route::get('/produit', [ProduitController::class, 'index'])->name('produits');
    Route::get('/category', [CategoryController::class, 'index'])->name('categories');
    
    Route::post('/updateProduit/{id}', [ProduitController::class, 'updateProduit'])->name('UpdateProduit')->middleware('auth');
    

    Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory'])->name('UpdateCategory')->middleware('auth');
    Route::post('/deleteProduit/{id}', [ProduitController::class, 'destroy'])->name('deleteProduit')->middleware('auth');
    
    Route::post('/deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory')->middleware('auth');
    Route::post('/storeCategory',  [CategoryController::class, 'store'])->name('storeCategory')->middleware('auth');

    Route::post('/storeProduit',  [ProduitController::class, 'store'])->name('storeProduit')->middleware('auth');
    Route::get('/', [ClientController::class, 'index'])->name('client');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

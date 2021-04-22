<?php

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

Route::get('/', function () {
    return view('pages.dashboard.dashboard');
})->name('dashboard');
Route::group(['prefix' => 'product'], function(){
    Route::get('',[App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('create',[App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('store',[App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('{id}/edit',[App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::put('{id}/update',[App\Http\Controllers\ProductController::class, 'update'])->name('product.update');    
    Route::delete('{id}/delete',[App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');    
});
Route::group(['prefix' => 'sale'], function(){
    Route::get('',[App\Http\Controllers\saleController::class, 'index'])->name('sale.index');
    Route::get('create',[App\Http\Controllers\saleController::class, 'create'])->name('sale.create');
    Route::post('store',[App\Http\Controllers\saleController::class, 'store'])->name('sale.store');
    Route::get('{id}/edit',[App\Http\Controllers\saleController::class, 'edit'])->name('sale.edit');
    Route::put('{id}/update',[App\Http\Controllers\saleController::class, 'update'])->name('sale.update');    
    Route::delete('{id}/delete',[App\Http\Controllers\saleController::class, 'destroy'])->name('sale.destroy');    
});

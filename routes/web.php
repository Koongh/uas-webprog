<?php

namespace App\Http\Controllers;

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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::resource('/', HomeController::class);
Route::resource('home', HomeController::class);

Route::controller(DashboardController::class)->middleware('auth', 'fired')->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/product/{id}/edit', 'edit');
    Route::match(['get', 'put'],'/product/{id}/update', 'update')->name('dashboard.edit');
    Route::get('/dashboard/new-product', 'create')->name('dashboard.create');
    Route::match(['get', 'put'],'/product/store', 'store')->name('dashboard.store');
    Route::get('/product/{id}/unavailable', 'unavailable')->name('dashboard.unavailable');
    Route::get('/product/{id}/delete', 'delete')->name('dashboard.delete');
    Route::get('/account', 'account')->middleware('admin')->name('account');
    Route::get('/account/{id}/delete', 'deleteAccount')->name('deleteAccount');
    Route::get('/hireAgain/{id}', 'hire')->name('hire');
    // Route::get('/dashboard/stock', 'stock')->name('dashboard.addStock');
    // Route::get('/dashboard/stock-product', 'addStock')->name('dashboard.addStock');
    Route::get('/dashboard/export-sales', 'exportSales')->middleware('admin');
});

Route::get("/about-us", function(){
    return view('aboutUs');
});

Route::controller(CashierController::class)->middleware('auth')->group(function(){
    Route::get('/cashier', 'index')->name('cashier');
    Route::post('/cashier', 'store');
});

Route::middleware('auth', 'fired')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
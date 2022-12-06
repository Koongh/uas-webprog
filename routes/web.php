<?php

namespace App\Models;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
//List of Models used
// use App\Models\Item;
// use App\Models\Motorcycle;
// use App\Models\Category;

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

Route::controller(DashboardController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/product/{id}/edit', 'edit');
    Route::match(['get', 'put'],'/product/{id}/update', 'update')->name('dashboard.edit');
    Route::get('/dashboard/new-product', 'create')->name('dashboard.create');
    Route::match(['get', 'put'],'/product/store', 'store')->name('dashboard.store');
    Route::get('/product/{id}/delete', 'delete')->name('dashboard.delete');
    Route::get('/account', 'account');
    // Route::get('/dashboard/stock', 'stock')->name('dashboard.addStock');
    // Route::get('/dashboard/stock-product', 'addStock')->name('dashboard.addStock');
});

Route::controller(HomeController::class)->middleware('auth')->group(function(){
    Route::get('discount', 'discount');
    // Route::get('discount', '');
});


Route::get("/about-us", function(){
    return view('aboutUs');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

//Relationship preview routes
Route::get('/products', function(){
    $products = Item::all();
    foreach($products as $product){
        echo "name = $product->name";
        echo "<br />";
    }
});

Route::get('/products/{id}/compatibility', function($id){
    $product = Item::findOrFail($id);
    echo "product name = $product->name<br />Compatible with<br />";
    $motos = $product->motorcycles->all();
    foreach($motos as $moto){
        echo "name = $moto->name";
        echo "<br />";
    }
});

Route::get('/motorcycles', function(){
    $motorcycles = Motorcycle::all();
    foreach($motorcycles as $motorcycle){
        echo "name = $motorcycle->name <br />";
    }
});

Route::get('/motorcycle/{id}/compatibility', function($id){
    $motorcycle = Motorcycle::findOrFail($id);
    echo "motorcycle name = $motorcycle->name <br />Compatible with<br />";
    $items = $motorcycle->items->all();
    foreach($items as $item){
        echo "name = $item->name <br />";
    }
});

Route::get('/categories/{id}', function($id){
    $category = Category::findOrFail($id);
    echo "Category name = $category->name";
    $products = $category->items;
    echo "Covers these product(s) : <br />";
    foreach($products as $product){
        echo "name = $product->name";
        echo "<br />";
    }
});

Route::get('/product/{id}/category', function($id){
    $product = Item::findOrFail($id);
    echo "$product->name is inside $product->category->name";
});

Route::get('/user/{id}/sold', function($id){
    $user = User::findOrFail($id);
    $soldItems = $user->sold->all();
    foreach($soldItems as $soldItem){
        echo $soldItem->name;
    }
});

Route::get('product/{id}/soldBy', function($id){
    $product = Item::findOrFail($id);
    $soldBys = $product->soldBy->all();
    foreach($soldBys as $soldBy){
        echo $soldBy->name;
    }
});

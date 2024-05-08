<?php

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

Route::get('/', function () {
    $products = config('db.products');
    return view('home', compact('products'));
})->name('home');

Route::get('/single', function () {
    $products = config('db.products');
    return view('single-page', compact('products'));
})->name('detail');

route::get('single/{id}', function ($id) {
    $product = config('db.products')[$id];
    // dd($product);

    return view('product', compact('product'));
});

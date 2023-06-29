<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Home;
use App\Http\Livewire\Categories\Show;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Authentication\Login;
use App\Http\Livewire\Authentication\Register;
use App\Http\Livewire\Categories\Show as Category;
use App\Http\Livewire\Categories\Index as Categories;
use App\Http\Livewire\Products\Show as Product;
use App\Http\Livewire\Products\Index as Products;


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

Route::get('/', Login::class);
Route::get('login', Login::class)->name('login');
Route::get('logout', [AuthController::class, 'logOut'])->name('logout');
Route::get('register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('home', Home::class)->name('home');
    Route::get('category/{id}', Category::class);
    Route::get('categories', Categories::class)->name('categories');
    Route::get('product/{id}', Product::class);
    Route::get('products', Products::class);
});
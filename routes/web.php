<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\UploadProduct;
use App\Http\Livewire\Admin\UploadCategory;
use App\Http\Livewire\Admin\ShopComponent;
use App\Http\Livewire\User\ViewProduct;
use App\Http\Livewire\Register;
use App\Http\Livewire\SortComponent;


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
    return view('welcome');
});

Route::get('/user/shop', ShopComponent::class)->name('user.shop');
Route::get('/user/product/{id}', ViewProduct::class)->name('product.details');
Route::get('/user/category/{id}', SortComponent::class)->name('category');
Route::get('/registr', Register::class)->name('registration');
Auth::routes();
Route::get('admin/upload/product', UploadProduct::class)->name('admin.product');
Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
Route::get('admin/upload/category', UploadCategory::class)->middleware('auth')->name('admin.category');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\LogoutController;
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

Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/about', App\Livewire\About::class)->name('about');
Route::get('/contact', App\Livewire\Contact::class)->name('contact');
Route::get('/login', App\Livewire\Auth\Login::class)->name('login');

Route::group(['middleware' => 'auth', 'prefix' => 'adm', 'as' => 'adm.'], function () {
    Route::get('/dashboard', App\Livewire\Admin\Dashboard::class)->name('dashboard');
    Route::get('/items', App\Livewire\Items\Index::class)->name('items.index');
    Route::get('/item/create', App\Livewire\Items\Create::class)->name('items.create');
    Route::get('/item/edit/{item}', App\Livewire\Items\Edit::class)->name('items.edit');

    Route::get('categories', App\Livewire\Categories\Index::class)->name('categories.index');
    Route::get('category/edit/{category}', App\Livewire\Categories\Edit::class)->name('categories.edit');
});
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

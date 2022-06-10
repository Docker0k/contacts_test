<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NumbersController;
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
    return redirect(route('contact.index'));
});

Route::controller(ContactsController::class)
    ->name('contact.')
    ->prefix('contacts')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{contact}/edit', 'edit')->name('edit');
        Route::post('/{contact}/update', 'update')->name('update');
        Route::get('/{contact}/remove', 'remove')->name('remove');
    });

Route::controller(NumbersController::class)
    ->name('number.')
    ->prefix('contact')
    ->group(function () {
        Route::get('/{contact}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{number}/edit', 'edit')->name('edit');
        Route::post('/{number}/update', 'update')->name('update');
        Route::get('/{number}/remove', 'remove')->name('remove');
    });

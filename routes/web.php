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
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/mother_dashboard','App\Http\Controllers\DashboardController@index')->name('mother_dashboard');
    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');

    Route::get('/Customer/create', 'App\Http\Controllers\CustomerController@create')->name('Customer.create');
    Route::put('/Customer/create', 'App\Http\Controllers\CustomerController@store')->name('Customer.store');
    Route::get('/Customer/list', 'App\Http\Controllers\CustomerController@list')->name('Customer.list');
    Route::get('/Customer/edit/{id}', 'App\Http\Controllers\CustomerController@edit')->name('Customer.edit');
    Route::post('/Customer/update/{id}', 'App\Http\Controllers\CustomerController@update')->name('Customer.update');
    Route::get('Customer/{id}', 'App\Http\Controllers\CustomerController@destroy')->name('Customer.destroy');
    Route::get('/Customer/preview/{id}', 'App\Http\Controllers\CustomerController@preview')->name('Customer.preview');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

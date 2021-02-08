<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group (can be found in "app/Http/Kernel.php"). Now create something great!
|
*/

// Redirect if no lang typed
Route::redirect('/', '/en');

// Add a SetLanguage middleware to all web routes in kernel that set the language
Route::group(['prefix' => '{lang}'], function () {

    Route::get('/', function () {
        return view('layouts/app');
    })->name('home');

});

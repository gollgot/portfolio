<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

// Laravel Voyager admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




// Redirect if no lang typed
Route::redirect('/', '/en');

// Add a SetLanguage middleware to all web routes in kernel that set the language
Route::group(['prefix' => '{lang}'], function () {

    // Home page
    Route::get('/', [HomeController::class, 'show'])->name('home.show');

    // Projects
    Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

});

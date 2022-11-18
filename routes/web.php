<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

use App\Http\Controllers\ContactFormController;
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

// Route::resource('contact', ContactFormController::class);



Route::prefix('contact')
    ->middleware(['auth'])
    ->controller(ContactFormController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/edo', 'create');
    });

// Route::get('contact', [ContactFormController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test.test');
});

Route::get('/test/controll', [TestController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
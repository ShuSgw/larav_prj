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



Route::prefix('/contacts')
    ->middleware(['auth'])
    ->controller(ContactFormController::class)
    ->group(function () {
        // show
        Route::get('/', 'index')->name('index');
        // route:get('url', controllerの関数)->name('route指定時の名前')

        // フォームで飛ばすページ
        Route::post('/', 'store')->name('store');

        // formがあるページ
        Route::get('/create', 'create')->name('create');

        // それぞれのページ

        Route::get('/{id}', 'show')->name('list');

        Route::get('edit/{id}', 'edit')->name('modify');

        Route::post('/{id}', 'update')->name('findoverwrite');
    });

// Route::get('contact', [ContactFormController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test.test');
})->name('test');

Route::get('/test/controll', [TestController::class, 'index'])->name('testWithRoute');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhoneController;

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

// auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// pages
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/phone', [PageController::class, 'phone'])->name('phone');
Route::post('/addPhone', [PageController::class, 'addPhone'])->name('addPhone');
Route::get('/import', [PageController::class, 'importForm'])->name('import');
Route::post('/importExcel', [PageController::class, 'import'])->name('importExcel');

// phone
Route::get('/phone/list', [PhoneController::class, 'index'])->name('list');

// admin panel
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/panel', [AdminController::class, 'index'])
        ->name('dashboard');

    Route::get('/user', [AdminController::class, 'user'])
        ->name('user');

    Route::get('/user/{id}', [AdminController::class, 'delete'])
        ->name('delete');

    Route::get('/phonenumber', [AdminController::class, 'phone'])
        ->name('phonenumber');

    Route::get('/phonelist/{id}', [AdminController::class, 'list'])
        ->name('phonelist');

    Route::get('/search', [AdminController::class, 'search'])
        ->name('search');
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;

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

Route::get('/', [HomeController::class, 'index'])->middleware('globalPrint');

Route::get('login', [LoginController::class, 'index'])->middleware('globalPrint');


Route::middleware('globalPrint')->prefix('catalog')->group(function () {
    Route::get('/', [CatalogController::class, 'index']);

    Route::prefix('create')->group(function () {
        Route::get('/', [CreateController::class, 'index']);
        Route::post('/', [CreateController::class, 'create']);
    });

    Route::get('show/{id}', [ShowController::class, 'index']);

    Route::prefix('edit/{id}')->group(function () {
        Route::get('/', [EditController::class, 'index']);
        Route::post('/', [EditController::class, 'edit']);
    });
});


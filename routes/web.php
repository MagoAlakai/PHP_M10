<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Home
use App\Http\Controllers\HomeController;

//Crud
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;

//Auth
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;

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
//Route Home
Route::get('/', [HomeController::class, 'index'])->middleware('globalPrint');

//Route login
Route::get('login', [LoginController::class, 'index'])->middleware('globalPrint');
Route::post('login', [LoginController::class, 'check'])->middleware('globalPrint');

//Route register
Route::get('register', [RegisterController::class, 'index'])->middleware('globalPrint');
Route::post('register', [RegisterController::class, 'store'])->middleware('globalPrint');

//Route recover password
Route::get('password', [PasswordController::class, 'index'])->middleware('globalPrint');
Route::post('password', [PasswordController::class, 'store'])->middleware('globalPrint');

//Routes Catalog
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


//Route página error 404
Route::get('error404', function(){
    return view('error404');
});


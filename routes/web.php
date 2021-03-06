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

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::post('/', function () {
        return 'post from Pantalla principal';
    });
    Route::put('/', function () {
        return 'put from Pantalla principal';
    });
    Route::delete('/', function () {
        return 'delete from Pantalla principal';
    });
});

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/', function () {
        return 'post from login';
    });
    Route::put('/', function () {
        return 'put from login';
    });
    Route::delete('/', function () {
        return 'delete from login';
    });
});

Route::prefix('logout')->group(function () {
    Route::get('/', function () {
        return 'Logout usuario';
    });
    Route::post('/', function () {
        return 'post from logout';
    });
    Route::put('/', function () {
        return 'put from logout';
    });
    Route::delete('/', function () {
        return 'delete from logout';
    });
});

Route::prefix('catalog')->group(function () {
    Route::prefix('/')->group(function () {
        Route::get('/', [CatalogController::class, 'index']);
        Route::post('/', function () {
            return 'post from catalog';
        });
        Route::put('/', function () {
            return 'put from catalog';
        });
        Route::delete('/', function () {
            return 'delete from catalog';
        });
    });

    Route::prefix('create')->group(function () {
        Route::get('/', [CreateController::class, 'index']);
        Route::post('/', [CreateController::class, 'create']);
        Route::put('/', function () {
            return 'put from catalog create';
        });
        Route::delete('/', function () {
            return 'delete from catalog create';
        });
    });

    Route::prefix('show/{id}')->group(function () {
        Route::get('/', [ShowController::class, 'index']);
        Route::post('/', function ($id) {
            return "post from catalog create del libro $id";
        });
        Route::put('/', function ($id) {
            return "put from catalog create del libro $id";
        });
        Route::delete('/', function ($id) {
            return "delete from catalog create del libro $id";
        });
    });

    Route::prefix('edit/{id}')->group(function () {
        Route::get('/', [EditController::class, 'index']);
        Route::post('/', [EditController::class, 'edit']);
        Route::put('/', function ($id) {
            return "put from catalog edit del libro $id";
        });
        Route::delete('/', function ($id) {
            return "delete from catalog edit del libro $id";
        });
    });
});


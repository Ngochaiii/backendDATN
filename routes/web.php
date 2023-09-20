<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('/', [LoginController::class, 'show'])->name('web.show');
Route::post('/', [LoginController::class, 'login'])->name('web.login');
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::group([
        'prefix' => '',
        'middleware' => 'is_active'
    ], function () {
        Route::get('/', [WebController::class, 'index'])->name('home.index');
        Route::group(['prefix' => 'branch'], function () {
            Route::get('/', [BranchController::class, 'index'])->name('branch');
            Route::get('/list', [BranchController::class, 'show'])->name('branch.list');
            Route::post('/add', [BranchController::class, 'store'])->name('branch.add');
            Route::get('/{slug}/edit', [BranchController::class, 'edit'])->name('branch.edit');
            Route::post('/{slug}/edit', [BranchController::class, 'update'])->name('branch.update');
        });
    });


    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});

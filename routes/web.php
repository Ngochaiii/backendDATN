<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\HomepageController;
use App\Http\Controllers\Web\ProductController as WebProductController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\Web\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\WishlistsController;

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
Route::get('/error', [WebController::class, 'error'])->name('web.error');
Route::get('/commingsoon', [WebController::class, 'comming'])->name('web.commingsoon');

Route::get('/', [LoginController::class, 'show'])->name('web.show');
Route::post('/', [LoginController::class, 'login'])->name('web.login');
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::group(['prefix' => '', 'middleware' => 'is_active'], function () {
        Route::group(['prefix' => '', 'middleware' => 'admin'], function () {
            // Route::group(['prefix' => '', 'middleware' => 'admin.role.admin'], function () {
            Route::get('/', [WebController::class, 'index'])->name('home.index');
            Route::group(['prefix' => 'branch'], function () {
                Route::get('/', [BranchController::class, 'index'])->name('branch');
                Route::get('/list', [BranchController::class, 'show'])->name('branch.list');
                Route::post('/add', [BranchController::class, 'store'])->name('branch.add');
                Route::get('/delete/{slug}', [BranchController::class, 'destroy'])->name('branch.delete');
                Route::get('/{slug}/edit', [BranchController::class, 'edit'])->name('branch.edit');
                Route::post('/{slug}/edit', [BranchController::class, 'update'])->name('branch.update');
            });
            Route::group(['prefix' => 'category'], function () {
                Route::get('/', [ProductCategoriesController::class, 'index'])->name('category');
                Route::post('/add', [ProductCategoriesController::class, 'store'])->name('category.add');
                Route::get('/delete/{id}', [ProductCategoriesController::class, 'destroy'])->name('category.delete');
            });
            Route::group(['prefix' => 'products'], function () {
                Route::get('/', [ProductController::class, 'index'])->name('product');
                Route::get('/list', [ProductController::class, 'show'])->name('product.list');
                Route::get('/show_wishlist/{id}', [WishlistsController::class, 'show_wishlist'])->name('show_wishlist');
                Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
                Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
                Route::post('/{id}/edit', [ProductController::class, 'update'])->name('product.update');
                Route::post('/add', [ProductController::class, 'store'])->name('product.add');
            });
            Route::group(['prefix' => 'event'], function () {
                Route::get('/', [EventController::class, 'index'])->name('events');
                Route::get('/create', [EventController::class, 'create'])->name('events.create');
                Route::post('/create', [EventController::class, 'store'])->name('events.store');
                Route::get('/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
                Route::post('/{id}/edit', [EventController::class, 'update'])->name('events.update');
            });
            Route::group(['prefix' => 'order'], function () {
                Route::get('/', [OrderController::class, 'index'])->name('order');
                Route::get('/show/{id}', [OrderController::class, 'show'])->name('order.show');
            });
            Route::group(['prefix' => 'transpost'], function () {
                Route::post('/add', [TransportController::class, 'index'])->name('transpost.add');
                Route::get('/show', [TransportController::class, 'show'])->name('transposts');
                Route::get('/infor-shipper/{id}', [TransportController::class, 'call'])->name('transposts.call');
                Route::get('/show/{id}', [TransportController::class, 'destroy'])->name('transposts.delete');
                Route::get('/done/{id}', [TransportController::class, 'access'])->name('transposts.call_shipper');
                // Route::get('/show/{id}', [OrderController::class, 'show'])->name('order.show');
            });
            Route::group(['prefix' => 'tickets'], function () {
                Route::get('/', [TicketsController::class, 'index'])->name('admin.tickets');
                Route::get('/{id}', [TicketsController::class, 'detail'])->name('admin.tickets.detail');
                Route::post('/{id}', [TicketsController::class, 'comment'])->name('admin.tickets.comment');
                Route::post('/{id}/close', [TicketsController::class, 'close'])->name('admin.tickets.close');
            });
            Route::group(['prefix' => 'blogs'], function () {
                route::get('/', [PostController::class, 'index'])->name('admin.posts');
                route::get('/create', [PostController::class, 'create'])->name('admin.posts.create');
                route::post('/create', [PostController::class, 'store'])->name('admin.posts.store');
                Route::get('/{key}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
                Route::post('/{key}/edit', [PostController::class, 'update'])->name('admin.posts.update');
                Route::post('/{key}/delete', [PostController::class, 'delete'])->name('admin.posts.delete');
            });
        });
    });

    Route::group(['prefix' => '', 'middleware' => 'user'], function () {
        Route::group(['prefix' => 'home-page'], function () {
            Route::get('/', [HomeController::class, 'index'])->name('home');
            Route::group(['prefix' => 'product'], function () {
                Route::get('/', [WebProductController::class, 'index'])->name('home.product');
                Route::get('/{id}', [WebProductController::class, 'show'])->name('home.product.show');
                Route::get('/detail/{id}', [WebProductController::class, 'edit'])->name('home.product.detail');
            });
            Route::group(['prefix' => 'ticket'], function () {
                Route::get('/', [TicketController::class, 'index'])->name('panel.ticket');
                Route::get('/create', [TicketController::class, 'create'])->name('controlpanel.ticket.create');
                Route::post('/create', [TicketController::class, 'store'])->name('controlpanel.ticket.store');
                Route::get('/{id}', [TicketController::class, 'detail'])->name('controlpanel.ticket.detail.edit');
                Route::post('/{id}', [TicketController::class, 'comment'])->name('controlpanel.ticket.update');
                Route::post('/{id}/close', [TicketController::class, 'close'])->name('controlpanel.ticket.close');
            });
        });
    });
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');


    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});

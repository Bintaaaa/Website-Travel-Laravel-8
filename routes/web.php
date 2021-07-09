<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\app\CheckoutController;
use App\Http\Controllers\app\DetailController;
use App\Http\Controllers\app\HomeController;
use Illuminate\Support\Facades\Route;

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

//home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/detail', [DetailController::class, 'index'])
    ->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])
    ->name('checkout-success');
//admin
Route::prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });

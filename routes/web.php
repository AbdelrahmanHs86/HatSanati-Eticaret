<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AdminController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home', [dashboardController::class, 'redirect']);
route::get('/', [dashboardController::class, 'index']);
route::get('/allproducts', [dashboardController::class, 'product']);
route::get('/products', [AdminController::class, 'product']);
route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
route::post('/showproduct', [AdminController::class, 'showproduct']);
route::post('/deleteproduct', [AdminController::class, 'deleteproduct']);

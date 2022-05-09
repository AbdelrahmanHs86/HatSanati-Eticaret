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
// route::get('/allproducts/{id}', [dashboardController::class, 'singleproduct']);
route::get('/addproducts', [AdminController::class, 'addproducts']);
route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
route::get('/showproducts', [AdminController::class, 'showproducts']);
route::get('/deleteproducts/{id}', [AdminController::class, 'deleteproducts']);
route::get('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
route::post('/editproduct/{id}', [AdminController::class, 'editproduct']);

route::get('/search', [dashboardController::class, 'searchproduct']);
route::get('/singleproduct/{id}', [dashboardController::class, 'singleproduct']);
route::post('/addcart/{id}', [dashboardController::class, 'addcart']);
route::get('/cart', [dashboardController::class, 'showcart']);

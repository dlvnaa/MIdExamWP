<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');

    return redirect('/homepage');
});

Route::get('/homepage/{id}', [HomeController::class, 'homePage']);

Route::get('/menu/{id}', [MenuController::class, 'showAllCoffee']);

Route::get('/transaction/{id}', [TransactionController::class, 'showTransactions']);

Route::get('/category/{id}', [CategoryController::class, 'showCoffeeCategory']);

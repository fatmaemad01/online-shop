<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/', [CategoryController::class, 'homeIndex'])
    ->name('home');


Route::group(
    [
        'prefix' => 'categories',
        'as' => 'categories.'
    ],
    function () {
        Route::get(
            '/',
            [CategoryController::class, 'index']
        )
            ->middleware(['auth'])
            ->name('index');

        Route::get('/create', [CategoryController::class, 'create'])
            ->name('create');
    }
);


Route::get('/products', [ProductController::class, 'index'])
    ->middleware(['auth'])
    ->name('products.index');

Route::get('/products/filter/{category}', [ProductController::class, 'filterByCategory'])
    ->name('products.filter');

/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

*/

require __DIR__ . '/auth.php';

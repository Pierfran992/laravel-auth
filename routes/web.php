<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainCotroller;
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

// ROUTE DEL MAINCONTOLLER
// index
Route::get('/', [MainCotroller::class , 'home'])
    ->name('home');
// private index
Route::get('/private/home', [MainCotroller::class, 'privateHome'])
    ->middleware(['auth', 'verified']) ->name('private.home');

// show
Route::get('/show/project/{project}', [MainCotroller::class, 'show'])
    ->name('project.show');
// private show
Route::get('/private/show/project/{project}', [MainCotroller::class, 'privateShow'])
    ->middleware(['auth', 'verified'])->name('private.project.show');

// delete
Route::get('/project/delete/{project}', [MainCotroller::class, 'delete'])
    ->name('project.delete');

// --------------------------------------

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

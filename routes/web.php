<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

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
    return view('home');
});

//comics index
Route::get('/comics', [ResourceController::class, 'index'])->name('comics.index');

//comics create
Route::get('/comics/create', [ResourceController::class, 'create'])->name('comics.create');

//comics show
Route::get('/comics/{comic}', [ResourceController::class, 'show'])->name('comics.show');

//comics store
Route::post('/comics',[ResourceController::class, 'store'])->name('comics.store');

//comics edit
Route::get('/comics/{comic}/edit', [ResourceController::class, 'edit'])->name('comics.edit');

//comics update
Route::put('/comics/{comic}', [ResourceController::class, 'update'])->name('comics.update');

//comics delete
Route::delete('/comics/{comic}', [ResourceController::class, 'destroy'])->name('comics.destroy');


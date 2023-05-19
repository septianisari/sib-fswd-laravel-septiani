<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::fallback(function(){
    return 'Halaman ini ghaib';
});

Route::get('/tampil', [UserController::class, 'tampilin'] );

Route::get('/tambah', [UserController::class, 'tambahin'] );

Route::get('/edit', [UserController::class, 'editin']);

Route::get('/detail', [UserController::class, 'detailin']);
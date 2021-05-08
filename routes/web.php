<?php

use Illuminate\Support\Facades\Route;

// añadimos ruta para AdminUsersController
use App\Http\Controllers\AdminUsersController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// añadimos ruta para admin
Route::resource('/admin/users', AdminUsersController::class);

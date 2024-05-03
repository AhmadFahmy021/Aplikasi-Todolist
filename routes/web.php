<?php

use App\Http\Controllers\CollabborationController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
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
    // return view('index');
    // return view('layout.main');
    return redirect('login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', ListsController::class);
    Route::get('detail/{id}', [TodoController::class, 'index']);
    Route::get('delete/todo/{todo}', [TodoController::class, 'destroy']);
    Route::get('delete/all/{todo}', [TodoController::class, 'deleteAll']);
    Route::get('detail/collab/{collaboration}', [CollabborationController::class, 'show']);
    Route::get('delete/collab/{collaboration}', [CollabborationController::class, 'destroy']);
});
// Route::post('detail/kirim', [TodoController::class, 'store']);
// Route::resource('detail', TodoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

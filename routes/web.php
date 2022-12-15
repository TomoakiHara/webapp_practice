<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', [TodoController::class, 'register']);
Route::get('/dashboard', [TodoController::class, 'get']);
Route::get('/move_taskpage', [TodoController::class, 'move_taskpage']);
Route::post('/add', [TodoController::class, 'add']);
Route::post('/update', [TodoController::class, 'edit']);
Route::post('/delete', [TodoController::class, 'delete']);

Route::get('/move_todopage', [taskController::class, 'move_todopage']);
// Route::post('/search', [TaskController::class, 'search']);
// Route::post('/update', [TaskController::class, 'edit']);
// Route::post('/delete', [TaskController::class, 'delete']);
require __DIR__.'/auth.php';

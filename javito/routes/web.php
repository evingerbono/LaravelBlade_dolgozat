<?php

use App\Http\Controllers\LessonsController;
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
    return view('welcome');
});

Route::get('/api/lesson', [LessonsController::class, 'index']);
Route::get('/api/lesson/{id}', [LessonsController::class, 'show']);

Route::put('/api/lesson/{id}', [LessonsController::class, 'update']);
Route::post('/api/lesson', [LessonsController::class, 'store']);

Route::delete("/api/lesson/{id}", [LessonsController::class, "delete"]);

Route::get("/lesson/edit/{id}", [LessonsController::class, "editView"]);
Route::get("/lesson/delete", [LessonsController::class, "deleteView"]);
Route::get('/lesson/list', [LessonsController::class, 'listView']);
Route::get('/lesson/new', [LessonsController::class, 'newView']);
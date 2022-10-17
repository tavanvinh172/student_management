<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', [StudentController::class, 'get_all_student']);
Route::get('/students/add', [StudentController::class, 'create']);
Route::post('/students/add', [StudentController::class, 'store']);
Route::get('/students/edit/{id}', [StudentController::class, 'get_student_by_id']);
Route::put('/students/edit/{id}', [StudentController::class, 'update']);
Route::get('/students/delete/{id}', [StudentController::class, 'destroy']);

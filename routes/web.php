<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tasks;

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

Route::get('/tasks/create', function () {
    return 'Create tasks';
});

Route::get('/tasks/update/{id}', function (int $id) {
    return "Update tasks $id";
})->where('id', '[0-9]+');

Route::get('/tasks', function () {
    return view('tasks/tasks', [
        'tasks' => Tasks::all()
    ]);
});

Route::get('/tasks/{id}', function (int $id) {
    return view('tasks/task', [
        'task' => Tasks::find($id)
    ]);
})->where('id', '[0-9]+');

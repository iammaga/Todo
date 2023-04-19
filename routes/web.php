<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tasks;
use App\Models\Users;

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

Route::get('/users', function () {
    return 'Users Page';
});

Route::get('/users/{id}', function (int $id) {
    return "User $id";
})->where('id', '[0-9]+');

Route::get('/users/create', function () {
    return 'Create User';
});

Route::get('/users/update/{id}', function (int $id) {
    return "Update User $id";
})->where('id', '[0-9]+');

Route::get('/users', function () {
    return view('users/users', [
        'users' => Users::all(),
    ]);
});

Route::get('/users/{id}', function (int $id) {
    return view('users/user', [
        'user' => Users::find($id)
    ]);
})->where('id', '[0-9]+');

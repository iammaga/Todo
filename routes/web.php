<?php

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

Route::get('/tasks', function () {
    return 'List tasks';
});

Route::get('/tasks/{id}', function (int $id) {
    return "tasks $id";
})->where('id', '[0-9]+');

Route::get('/tasks/create', function () {
    return 'Create tasks';
});

Route::get('/tasks/update/{id}', function (int $id) {
    return "Update tasks $id";
})->where('id', '[0-9]+');

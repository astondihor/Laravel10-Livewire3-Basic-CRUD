<?php

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

use App\Livewire\Counter;

Route::get('/counter', Counter::class);

Route::get('/users/create', \App\Livewire\Users\CreateUser::class);
Route::get('/users/{user}/edit', \App\Livewire\Users\EditUser::class)->name('users.edit');
Route::get('/users/{user}', \App\Livewire\Users\ShowUser::class)->name('users.show');
Route::get('/users', \App\Livewire\Users\UsersIndex::class);
<?php

use App\Http\Controllers\todosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ todosController::class, 'index' ])->name('todo.home');

Route::get('/create', function () {
    return view('create');
})->name('todo.create');

//edit route
Route::get('/edit/{id}',[todosController::class, 'edit'])->name('todo.edit');

//create todo route, tada create kore submit korle toto.store o jabe,,store function create
Route::post('/create', [todosController::class, 'store'])->name('todo.store');

//Delete todo route
Route::get('/delete/{id}', [todosController::class, 'delete'])->name('todo.delete');



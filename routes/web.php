<?php

use App\Http\Controllers\todosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ todosController::class, 'index' ])->name('todo.home');

Route::get('/create', function () {
    return view('create');
})->name('todo.create');

//edit route
Route::get('/edit/{id}',[todosController::class, 'edit'])->name('todo.edit');

//Delete todo route
Route::get('/delete/{id}', [todosController::class, 'delete'])->name('todo.delete');

//create todo route, tada create kore submit korle todo.store o jabe,,store function create
Route::post('/create', [todosController::class, 'store'])->name('todo.store');

//update todo data
Route::post('/update', [todosController::class, 'update'])->name('todo.updatedata');


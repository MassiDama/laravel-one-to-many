<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    Route::get('/', [TypeController :: class, 'index'])
    -> name('type.index');

    Route::get('/projects', [ProjectController :: class, 'index'])
    -> name('project.index');
});

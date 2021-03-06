<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home/{user}', 'HomeController@index')->name('home');

Route::get('/tasks/create', 'TasksController@create'); /* Task Create Route */
Route::get('/tasks/{tasks}', 'TasksController@show');
Route::post('/tasks', 'TasksController@store'); /* Task Save Route */

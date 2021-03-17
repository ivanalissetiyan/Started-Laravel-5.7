<?php

Route::get('/', 'homeController@index');

Route::get('tasks', 'taskController@index');
Route::post('tasks', 'taskController@store');
Route::get('tasks/{task}', 'taskController@show'); 
Route::get('tasks/{task}/edit', 'taskController@edit');
Route::put('tasks/{task}/edit', 'taskController@update');
Route::delete('tasks/{task}/delete', 'taskController@delete');
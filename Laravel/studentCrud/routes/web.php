<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StudentsController@index');
Route::get('/students', 'StudentsController@create')->name('student.create');
Route::post('/students', 'StudentsController@store')->name('student.store');
Route::get('/students/{student}', 'StudentsController@edit')->name('student.edit');
Route::post('/students/{student}', 'StudentsController@update')->name('student.update');
Route::delete('/students/{student}', 'StudentsController@destroy')->name('student.destroy');

Route::post('/', 'StudentsController@index')->name('student.index');
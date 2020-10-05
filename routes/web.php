<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
  return view('home');
}) ->name('home');

Route::get('/employees', 'GuestController@index')->name('employees-index');

Route::get('/employee/create', 'LoggedController@create')->name('employee-create');

Route::post('/employee/store', 'LoggedController@store')->name('employee-store');

Route::get('/employee/edit/{id}', 'LoggedController@edit')->name('employee-edit');

Route::post('/employee/update/{id}', 'LoggedController@update')->name('employee-update');

Route::get('/employees/show/{id}', 'GuestController@show')->name('employees-show');

Route::get('/employees/destroy/{id}', 'LoggedController@destroy')->name('employee-destroy');

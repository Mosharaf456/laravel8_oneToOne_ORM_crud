<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// show all users data
Route::get('/users','UsersController@index');
Route::get('/profiles','ProfilesController@index');

// form create and insert /store data
Route::get('/users/create','UsersController@create');
// insert new data
Route::post('/users/create','UsersController@store');

//show
Route::get('/users/{id}/show','UsersController@show');

// edit
Route::get('/users/{id}/edit','UsersController@edit');

Route::patch('/users/{id}/edit','UsersController@update');

// delete
Route::delete('/users/{id}/delete','UsersController@destroy'); 




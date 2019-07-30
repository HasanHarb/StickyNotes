<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('notes', 'NotesController');
Route::post('/notes/StorePerson', 'NotesController@StorePerson')->name('person.store');
Route::post('/notes/ChangeStatus', 'NotesController@ChangeStatus');
Route::get('/contact', function () {
    return view('notes.contact');
});
Route::get('/{id}', 'NotesController@show');
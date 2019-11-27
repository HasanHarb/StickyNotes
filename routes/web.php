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

Route::post('/notes/updateNote','NotesController@updateNote')->name('note.updateNote');

Route::resource('notes', 'NotesController');
Route::post('/notes/StorePerson', 'NotesController@StorePerson')->name('person.store');
Route::post('/notes/ChangeStatus', 'NotesController@ChangeStatus');

Route::get('/notes/delete/{id}' , 'NotesController@destroy')->name('note.delete');


Route::get('/contact', 'ContactController@index');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');

Route::get('/{id}', 'NotesController@show');

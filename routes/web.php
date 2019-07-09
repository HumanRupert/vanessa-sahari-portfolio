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
    return view('home');
});
Route::get('/project/{id}', function ($id) {return view('project'.$id);});

Route::resource('projects', 'ProjectsController');
Route::resource('contact', 'ContactFormController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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
    return view('auth/login');
});

Auth::routes();
//Authentication Route

Route::get('/home', 'HomeController@index')->name('home');

//===========================================================================
// Route Add Directory
//Posting
Route::post('/add-directory', [
    'uses' => 'HomeController@addDirectory',
    'as' => 'add.directory',
]);

//Routing
Route::get('/create-directory', [
    'uses' => 'HomeController@createDirectory',
    'as' => 'create_directory',
    'middleware' => 'auth'
]);

//===========================================================================
//Route Get Directories

Route::get('/get-directories', [
    'uses' => 'HomeController@getDirectories',
    'as' => 'get_directories',
    'middleware' => 'auth'
]);

//===========================================================================
//Route Edit Directory
//Edit Directory

//Update page route
Route::get('/update-directory/{id}', [
    'uses' => 'HomeController@updateDirectory',
    'as' => 'update_directory',
    'middleware' => 'auth'
]);

//Save changes
//Posting
Route::post('/save-directory', [
    'uses' => 'HomeController@saveDirectory',
    'as' => 'save.directory',
]);
//===========================================================================
//Route Delete Directory
Route::post('/remove-directory', [
    'uses' => 'HomeController@removeDirectory',
    'as' => 'remove.directory',
]);
//===========================================================================

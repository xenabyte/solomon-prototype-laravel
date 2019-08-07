<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// fetch business route
Route::get('/directories', [
    'uses' => 'ApiController@getDirectories'
]);
//view business route
Route::get('/directory/{id}', [
    'uses' => 'ApiController@getDirectory'
]);
//search business route
Route::post('/search', [
    'uses' => 'ApiController@searchDirectory'
]);

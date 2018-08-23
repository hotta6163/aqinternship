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

Route::get('hello/{id}', 'Api\HelloController@all');

Route::get('employee/{family_name}/{given_name}/{what}', 'Api\GetdataController@all');

Route::post('employee/{family_name}/{given_name}/position', 'Api\PostdataController@all');

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//: For api request
Route::group(['prefix' => 'api/v1/web', 'namespace' => 'App\Api\V1\Web\Controllers'], function() {

    Route::resource('user', 'UsersController');
});

Route::any('/{url?}', ['uses' => 'App\Api\V1\Web\Controllers\PageController@index']);
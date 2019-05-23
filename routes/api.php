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

Route::get('/start', 'API\GlobalController@index')->middleware('jwt.auth');
Route::post('/store-receipt-sheet', 'API\ReceiptSheetController@store')->middleware('jwt.auth');

Route::prefix('user')->group(function(){
    Route::post('/login', 'API\AuthController@login');
});


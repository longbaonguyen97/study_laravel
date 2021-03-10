<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
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
////
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/data',[testController::class,'getData']);

Route::get('data','App\Http\Controllers\testController@getData');
//get all users
Route::get('users','App\Http\Controllers\testController@index');
//get one user base on id
Route::get('users/{id}','App\Http\Controllers\testController@show');
//pagination for table users
Route::get('pagination','App\Http\Controllers\testController@pagination');
//get detail info user and return json
Route::get('users/detail/{id}','App\Http\Controllers\testController@user_detail');
//create user
Route::post('users','App\Http\Controllers\testController@store');
//update user id
Route::put('users/{id}','App\Http\Controllers\testController@update');
//delete user id
Route::delete('users/{id}','App\Http\Controllers\testController@destroy');

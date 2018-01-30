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
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout_api');
//Route::group(['middleware' => 'auth:api'], function() {
Route::get('pizza', 'pizza_api@index');
Route::get('pizza/{pizza}', 'pizza_api@show');
Route::post('pizza', 'pizza_api@store');
Route::put('pizza/{pizza}', 'pizza_api@update');
Route::delete('pizza/{pizza}', 'pizza_api@delete');
//});
//{"id":5,"sub_id":2,"pizza_name":"margrrrrrrit","pizza_component":"{sealt,meat,checken}","pizza_datiles":"gooooooooood","pizza_image":"margrrit.jpg","larg":120,"medium":90,"small":90}

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
use App\User;
Auth::routes();
Route::group(['prefix' => LaravelLocalization::setLocale() ,
'middleware' => ['localeSessionRedirect', 'localizationRedirect']] , function(){
Route::get('food', function () {
    return view('home.food');
})->middleware('auth');
Route::get('admin', function () {
    return view('admin.index');
})->middleware('auth');
/////////// admin ////////////////////
Route::get('category','Categorys@show');
Route::get('subcategory','SubCategorys@show');
Route::get('pizza','Pizzas@show');
Route::get('allbuy','buy@allbuy');
/////////// Home ////////////////////
Route::get('/','Home@show');
Route::get('type/{id}','Home@allfood');
Route::get('pizz/{id}','Home@food');
});
/////////// Category////////////////////
Route::post('addca','Categorys@create');
Route::post('deletcat','Categorys@destroy');
Route::post('updatecat','Categorys@update');
/////////// SubCategory////////////////////
Route::post('addsubca','SubCategorys@create');
Route::post('deletsubcat','SubCategorys@destroy');
Route::post('updatesubcat','SubCategorys@update');
/////////// pizza ////////////////////
Route::post('addpizza','Pizzas@create');
Route::post('deletpizza','Pizzas@destroy');
Route::post('updatepizza','Pizzas@update');
Route::get('update/{id}','Pizzas@showpizza');
Route::post('size','Home@size');
/////////////////buy////////////
Route::post('buy','buy@buy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('get-curl', 'HomeController@getCURL');

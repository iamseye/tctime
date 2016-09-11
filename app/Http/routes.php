<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);
Route::auth();

//backend
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function($router) {

    Route::resource('/','IndexController');

    Route::group(['prefix' => 'overview'], function () {
        Route::get('/','InfoController@editInfo');
        Route::get('/info','InfoController@editInfo');
        Route::patch('/info/update/{id}','InfoController@updateInfo');
        Route::get('/indexInfo','InfoController@editIndexInfo');
        Route::patch('/indexInfo/update/{id}','InfoController@updateIndexInfo');
        Route::get('/about','InfoController@editAboutUs');
        Route::patch('/about/update/{id}','InfoController@updateAboutUs');
    });

    Route::resource('/tour','TourController');
    Route::resource('/booking','BookingController');

    Route::resource('/news','NewsController');
    Route::get('/news/cate/{cate}','NewsController@showCatePage');

    Route::resource('/msg','MsgController');

});



<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','OffersController@getSearch');

Route::get('/search','OffersController@getSearch');

Route::get('/guest/offer','GuestController@getOffer');

Route::post('/search','OffersController@postSearch');

Route::post('/guest/offer','GuestController@postOffer');

Route::post('/guest/checkOffer','GuestController@postCheckOffer');

App::bind('GuestRepositoryInterface','EloquentGuestRepository');
Route::controller('guest', 'GuestController');

App::bind('OffersRepositoryInterface','EloquentOffersRepository');
Route::controller('offers', 'OffersController');

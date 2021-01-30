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

Route::get('/','Main\HomeController@index');

/*--------------------------------------------------------------------------START--*/ 
    Route::group(['prefix' => 'wedding'], function()
    {
        Route::get('{code}','Invitation\WeddingController@index');
        Route::post('{code}/send-rsvp','Invitation\WeddingController@ajax_send_rsvp');
        Route::post('{code}/send-wish','Invitation\WeddingController@ajax_send_wish');
        Route::get('{code}/get-rsvp','Invitation\WeddingController@ajax_get_rsvp');
        Route::get('{code}/get-wish','Invitation\WeddingController@ajax_get_wish');
    });
/*--------------------------------------------------------------------------END----*/ 

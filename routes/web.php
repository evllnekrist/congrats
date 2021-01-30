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
    Route::group(['prefix' => 'w'], function()
    {
        Route::get('{code}','Invitation\WeddingController@index');
        Route::post('{code}/send-rsvp','Invitation\WeddingController@ajax_send_rsvp');
        Route::post('{code}/send-wish','Invitation\WeddingController@ajax_send_wish');
        Route::get('{code}/get-rsvp','Invitation\WeddingController@ajax_get_rsvp');
        Route::get('{code}/get-wish','Invitation\WeddingController@ajax_get_wish');
    });
/*--------------------------------------------------------------------------END----*/
 

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
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
    // start----wedding
    Route::group(['prefix' => 'w'], function()
    {
        Route::get('',function(){
            return view('_main._page.error',['lost'=>true]);
        });
        Route::get('{code}','Invitation\WeddingController@outer_index');
        Route::get('{code}/inner','Invitation\WeddingController@inner_index');
        Route::post('{code}/send-rsvp','Invitation\WeddingController@ajax_send_rsvp');
        Route::post('{code}/send-wish','Invitation\WeddingController@ajax_send_wish');
        Route::post('{code}/send-wish&rsvp','Invitation\WeddingController@ajax_send_wish_and_rsvp');
        Route::get('{code}/get-rsvp','Invitation\WeddingController@ajax_get_rsvp');
        Route::get('{code}/get-wish','Invitation\WeddingController@ajax_get_wish');
        Route::get('{code}/get-wish/v2','Invitation\WeddingController@ajax_get_wish_v2');
    });
    Route::group(['prefix' => 'ws'], function()
    {
        Route::get('temp/{parent_temp_id}/{child_temp_id}','Main\HomeController@display_invitation_sample_page');
        Route::get('temp-in/{parent_temp_id}/{child_temp_id}','Main\HomeController@display_invitation_sample_page_in');
    });
    Route::group(['prefix' => 'wm'], function()
    {
        Route::get('',function(){
            return view('_main._page.error',['lost'=>true]);
        });
        Route::get('create-link','Invitation\WeddingManagementController@create_link_index');
        Route::post('create-link/add-new','Invitation\WeddingManagementController@ajax_create_link');
        Route::get('ss/{code}/prep','Invitation\WeddingManagementController@self_service_prep_index');
        Route::post('ss/store-draft/{code}','Invitation\WeddingManagementController@ajax_store_draft');
        Route::get('ss/{code}/current','Invitation\WeddingManagementController@self_service_current_index');
        Route::post('ss/store-invite/{code}','Invitation\WeddingManagementController@ajax_store_invite');
    });
    // end------wedding
    // start----event
    Route::group(['prefix' => 'e'], function()
    {
        Route::get('',function(){
            return view('_main._page.error',['lost'=>true]);
        });
        Route::get('{code}','Invitation\EventController@outer_index');
        Route::get('{code}/inner','Invitation\EventController@inner_index');
        Route::post('{code}/send-rsvp','Invitation\EventController@ajax_send_rsvp');
        Route::post('{code}/send-wish','Invitation\EventController@ajax_send_wish');
        Route::get('{code}/get-rsvp','Invitation\EventController@ajax_get_rsvp');
        Route::get('{code}/get-wish','Invitation\EventController@ajax_get_wish');
    });
    // end------wedding
    Route::group(['prefix' => 'co-solution'], function()
    {
        Route::get('/','Main\CoSoController@index');
    });
    Route::group(['prefix' => 'jastip'], function()
    {
        Route::get('/','Main\JastipController@index');
        Route::get('/get-page','Main\JastipController@ajax_get_nextprev_page');
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
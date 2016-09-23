<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::GET('causes/publish/{cause}', 'CauseController@publish');
Route::group(['middleware' => ['web']], function(){
	Route::resource('causes', 'CauseController');
	Route::resource('causeowners', 'CauseOwnersController');
	Route::resource('causehelpers', 'CauseHelpersController');
	Route::resource('causecontribution', 'CauseContributionController');
	Route::resource('causeresult', 'CauseResultController');
	Route::resource('document', 'DocumentController');

});

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');



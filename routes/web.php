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

Route::get('/logout', 'Auth\LoginController@logout');

Route::GET('causes/publish/{cause}', 'CauseController@publish');
Route::group(['middleware' => ['web']], function(){
	Route::resource('causes', 'Cause\CauseController');
	Route::resource('causeowners', 'Cause\CauseOwnersController');
	Route::resource('causehelpers', 'Cause\CauseHelpersController');
	Route::resource('causecontribution', 'Cause\CauseContributionController');
	Route::resource('cause/result', 'Cause\CauseResultController');
	Route::resource('document', 'DocumentController');

});



Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');



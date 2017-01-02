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

Route::get('/', 'MainController@index');
Route::get('/tracks', 'TrackController@index');
Route::get('/home', 'MainController@home');
Route::get('/profile/main/{user}', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@index'
]);

Route::get('/coverimage/{coverfilename}', [
    'uses' => 'MainController@getCover',
    'as' => 'cover.image',
]);

Route::get('/audiotrack/{trackfilename}', [
    'uses' => 'MainController@getTrack',
    'as' => 'audio.track',
]);

Route::get('/profile/purchases/{user}', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@purchases'
]);

Route::get('/profile/add_track/{user}', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@addTrack'
]);

Route::post('/profile/{user}/add_track', [
    'middleware' => 'auth',
    'uses' => 'TrackController@create'
]);

Route::get('/profile/{track}/delete', [
    'middleware' => 'auth',
    'uses' => 'TrackController@destroy'
]);

Route::get('/profile/{track}/edit', [
    'middleware' => 'auth',
    'uses' => 'TrackController@edit'
]);

Route::post('/profile/{track}/edit', [
    'middleware' => 'auth',
    'uses' => 'TrackController@update'
]);

Route::group(['middleware' => ['owner']], function() {
        Route::get('/profile/{track}/delete', [
        'middleware' => 'auth',
        'uses' => 'TrackController@destroy'
    ]);
        Route::post('/profile/{track}/edit', [
        'middleware' => 'auth',
        'uses' => 'TrackController@update'
    ]);
        Route::get('/profile/{track}/edit', [
        'middleware' => 'auth',
        'uses' => 'TrackController@edit'
    ]);    
});

Route::get('/producers/{user}', 'ProducerController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Маршруты запроса ссылки для сброса пароля...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Маршруты сброса пароля...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
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

//    Event::listen('Modelbook\Events\UserRegistred', function($event)
//    {
//        dd('Send email to registred user');
//    });

/*
 * These are just static pages
 */
Route::get('/', 'PagesController@home');
Route::get('login', 'PagesController@login', ['before' => 'guest']);
Route::get('home', [
    'before' => 'guest',
    'as' => 'home',
    'uses' =>'PagesController@index'
]);

Route::get('messages', [
    'before' => 'guest',
    'as' => 'messages',
    'uses' =>'PagesController@messages'
]);


Route::get('procedure.create', [
    'before' => 'guest',
    'as' => 'new.procedure',
    'uses' =>'PagesController@createProcedure'
]);
/*
 * Registration and Authentication Laravel default
 */

Route::get('register', [
    'middleware' => 'auth',
    'as' => 'register_path',
    'uses' =>'Auth\AuthController@create'
]);

Route::get('send', [
    'as' => 'send',
    'uses' =>'Auth\AuthController@sendMails'
]);

Route::get('delete', [
    'as' => 'register_path',
    'uses' =>'Auth\AuthController@destroy'
]);

Route::get('all', [
    'as' => 'register_path',
    'uses' =>'Auth\AuthController@all'
]);

Route::post('register', [
    'before' => 'auth',
    'as' => 'register_path',
    'uses' =>'Auth\AuthController@store'
]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get("/sms", 'SmsController@index');
Route::resource('sms', 'SmsController');

# User Profile

Route::get('/{user_profile}', 'UserProfilesController@show');


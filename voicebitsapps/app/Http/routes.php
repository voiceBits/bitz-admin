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
# Admin Login
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

# Main
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index'); // authenticated users home

# Blog pages
Route::get('about', 'WelcomeController@about');
Route::get('blog', 'WelcomeController@blog');

// Model bind and Resource routes

    # Users
    Route::model('users', 'App\User');
    Route::resource('users', 'UsersController');
    
    # voicebitZ tables - Authenticated users only
    Route::get('userz', 'HomeController@userz');
    Route::get('bitz', 'HomeController@voizbitz');
    Route::get('cloudz', 'HomeController@cloudz');
    Route::get('peepz', 'HomeController@peepz');
    
    # userZ resource routing
    Route::get('userz/{id}/edit', 'ZuserzController@edit');
    Route::match(['put', 'patch'],'userz/{id}','ZuserzController@update');
    Route::delete('userz/{id}', 'ZuserzController@destroy');
    
    # voizbitZ resource routing
    Route::resource('bitz', 'ZvoizbitzController');


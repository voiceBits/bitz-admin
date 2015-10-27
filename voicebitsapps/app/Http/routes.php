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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('profile', 'HomeController@memberprofile');
Route::get('members', 'PageController@home');
Route::get('tasks', 'TaskController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('login', 'PageController@login');
//Route::get('home', 'PageController@home');
// Intervention Image 2.x Library
/* Try the same thing with videos????? 
Route::get('pinduin_orig', function()
{
    $img = Image::make('images/peggy_penguin_2.png')->resize(60, 60);

    return $img->response('png');
});
*/
// consider using storage as the file location like this
//
Route::get('swipeggy', function()
{
    $img = Image::make('images/peggy_penguin_2.png')->resize(90, 90);

    return $img->response('png');
});
Route::get('photos', function()
{
    $img = Image::make('images/peggy_penguin_2.png')->resize(80, 80);

    return $img->response('png');
});
Route::get('peggyicon-medium', function()
{
    $img = Image::make('images/peggy_penguin_2.png')->resize(55, 55);

    return $img->response('png');
});
Route::get('photos/{filename}', function($filename)
{
	if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
    $path = 'images' . DS . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);

    $img = Image::make($file);

    return $img->response($type);
});

Route::get('photos/thumbnails/{filename}', function($filename)
{
	if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
    $path = 'images' . DS . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);

    $img = Image::make($file)->resize(60, 60);

    return $img->response($type);
});

Route::get('thumbnails/{filename}', function($filename)
{
	if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
    $path = 'images' . DS . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);

    $img = Image::make($file)->resize(120, 120);

    return $img->response($type);
});
Route::get('posters/{filename}', function($filename)
{
	if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
    $path = 'images' . DS . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);

    $img = Image::make($file)->resize(240, 240);

    return $img->response($type);
});

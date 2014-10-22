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

//  Sessions routing-------------------------------------------------------
//  Start
//

Route::get('/', 'SessionsController@index');
Route::get('/login', 'SessionsController@showLoginPage');
Route::get('/logout', 'SessionsController@tryLogout');
Route::post('/attemptToLogin', 'SessionsController@attemptToLogin');

//
//  End
//  -----------------------------------------------------------------------


//  including module-separated routes files
require_once app_path().'/routes.students.php';

//  including testing routes files just for local env
if (App::environment('local'))
{
    //  include
    require_once app_path().'/routes.tests.php';
}

//  including testing routes files just for development env
if (App::environment('development'))
{
    //  include
}
<?php
/**
 * Created by PhpStorm.
 * User: lichris
 * Date: 14. 10. 22
 * Time: 오후 6:12
 */

Route::group(array('prefix' => 'students'), function()
{
   Route::get('/dashboard', array('as' => 'students.dashboard', 'uses' => 'StudentsController@showDashboard'));
});
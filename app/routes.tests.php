<?php
/**
 * Created by PhpStorm.
 * User: lichris
 * Date: 14. 10. 22
 * Time: 오후 5:16
 */

Route::group(array('prefix' => 'tests'), function()
{

    Route::get('/insert_db', function()
    {

       $user = new User;
       $user->user_email = 'asdf@asdf.asdf';
       $user->password = Hash::make('asdf');
       $user->role_name = 'student';
       $user->save();

       return dd($user);

    });

});
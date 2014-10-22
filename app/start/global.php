<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

View::composer('after_login.pages.sidebar', function($view) {

    $student_sidebar_menulist = array(

        new MenuElement('내 클래스', 'students/myClass',
            array(
                new MenuElement('개별 보기', 'students/myClass/viewIndividually'),
            )
        ),

        new MenuElement('레벨 테스트', 'students/levelTest',
            array(
                new MenuElement('레벨 테스트 참여', 'students/levelTest/participate'),
                new MenuElement('결과보기', 'students/levelTest/showResults'),
            )
        ),

        new MenuElement('교육 종합평가', 'students/comprehensiveEvaluation'),

        new MenuElement('커뮤니티', 'students/community',
            array(
                new MenuElement('방명록', 'students/community/guestBook'),
                new MenuElement('게시판', 'students/community/board',
                    array(
                        new MenuElement('공지사항', 'students/community/board/bulletin'),
                        new MenuElement('학습자료', 'students/community/board/learningMaterials'),
                        new MenuElement('과제', 'students/community/board/assignment'),
                    )),
            )
        ),

        new MenuElement('내 교육 스케줄', 'students/mySchedule'),

    );

    $view->with('menu_list', $student_sidebar_menulist);

});

View::composer('after_login.pages.header', function($view) {

    $view->with('user', Auth::user());

});

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';

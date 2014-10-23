<?php
/**
 * Created by PhpStorm.
 * User: lichris
 * Date: 14. 10. 22
 * Time: 오후 6:12
 */

Route::group(array('prefix' => 'students'), function() {

	Route::group(array('prefix' => 'myClass'), function() {

		Route::get('/', array('as' => 'students.myClass',
							'uses' => 'StudentsController@showMyClass'));

		Route::get('/showIndividually', array('as' => 'students.myClass.showIndividually',
											'uses' => 'StudentsController@showIndividually'));

	});

	Route::group(array('prefix' => 'levelTest'), function() {

		Route::get('/', array('as' => 'students.levelTest',
							'uses' => 'StudentsController@showLevelTest'));

		Route::get('/participate', array('as' => 'students.levelTest.participate',
										'uses' => 'StudentsController@participate'));

		Route::get('/showResults', array('as' => 'students.levelTest.showResults',
			'uses' => 'StudentsController@showResults'));

	});

	Route::group(array('prefix' => 'comprehensiveEvaluation'), function() {

		Route::get('/', array('as' => 'students.comprehensiveEvaluation',
							'uses' => 'StudentsController@showComprehensiveEvaluation'));

	});

	Route::group(array('prefix' => 'manageMyClass'), function() {

		Route::get('/', array('as' => 'students.manageMyClass',
							'uses' => 'StudentsController@showManageMyClass'));

		Route::get('/absenceManagement', array('as' => 'students.manageMyClass.absenceManagement',
											'uses' => 'StudentsController@showAbsenceManagement'));

	});

	Route::group(array('prefix' => 'community'), function() {

		Route::get('/', array('as' => 'students.community',
							'uses' => 'StudentsController@showCommunity'));

		Route::get('/guestBook', array('as' => 'students.community.guestBook',
									'uses' => 'StudentsController@showGuestBook'));

		Route::group(array('prefix' => 'board'), function() {

			Route::get('/', array('as' => 'students.community.board',
								'uses' => 'StudentsController@showBoard'));

			Route::get('/bulletin', array('as' => 'students.community.board.bulletin',
										'uses' => 'StudentsController@showBulletin'));

			Route::get('/learningMaterials', array('as' => 'students.community.board.learningMaterials',
												'uses' => 'StudentsController@showLearningMaterials'));

			Route::get('/assignment', array('as' => 'students.community.board.assignment',
											'uses' => 'StudentsController@showAssignment'));

		});

	});

	Route::group(array('prefix' => 'mySchedule'), function() {

		Route::get('/', array('as' => 'students.mySchedule',
							'uses' => 'StudentsController@showMySchedule'));

	});

});
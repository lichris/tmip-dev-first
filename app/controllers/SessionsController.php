<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index() {
		//
        if ( Auth::check() ) {
            if ( Auth::user()->role_name == 'student' ) {
                return Redirect::to('students/dashboard');
            }
        }
        else {
            return Redirect::to('login');
        }
	}

    public function showLoginPage() {
        return View::make('before_login.pages.login');
    }

	public function attemptToLogin() {
        if ( Auth::attempt(Input::only('user_email', 'password')) ) {
            if ( Auth::user()->role_name == 'student' ) {
                return Redirect::to('students/dashboard');
            }
        }
        else {
            return Redirect::back()->withInput();
        }
    }

    public function tryLogout() {
        Auth::logout();
    }
}
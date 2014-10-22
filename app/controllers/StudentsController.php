<?php

class StudentsController extends \BaseController {

    public function showDashboard() {
        return View::make('after_login.layouts.master');
    }

}
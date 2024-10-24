<?php

namespace App\Controllers;

use PROJECT\View\View;

class SignupController
{
    public function index(): null
    {
        return View::makeView("auth.signup");
    }
}
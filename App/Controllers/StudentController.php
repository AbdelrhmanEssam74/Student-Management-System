<?php

namespace App\Controllers;

use PROJECT\View\View;

class StudentController
{
    public function index()
    {
        return View::makeView("home");
    }
}
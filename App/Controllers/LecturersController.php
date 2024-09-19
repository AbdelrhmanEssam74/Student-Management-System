<?php

namespace App\Controllers;

use PROJECT\View\View;

class LecturersController
{
    public function index(): null
    {
        return View::makeView("Lecturers");
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function studentPageView()
    {
        return view('student.newStudent');
    }
    function welcomePage()
    {
        return view('welcome');
    }
}

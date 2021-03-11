<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test_table;

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
    public function allData()
    {
        // all()
        //find()
        //findOrFail()
        $data = test_table::all();
        // dd($data);
        return view('testViewAll', compact('data'));
    }
    public function singleData($id)
    {
        $data = test_table::findOrFail($id);
        return view('testView', compact('data'));
    }
}

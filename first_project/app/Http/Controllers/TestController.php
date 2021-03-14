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
    public function addPage()
    {
        return view("addPage");
    }
    public function addINFO(Request $request)
    {
        $newTest = new test_table();
        $newTest->test_name = $request->name;
        $newTest->test_roll = $request->roll;
        // $request->address = $request->address;

        $newTest->save();
        return redirect()->action('TestController@allData')->with('message', 'Dest data added');
    }
}

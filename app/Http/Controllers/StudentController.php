<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public  function  addNewStudent(){
        $gender = DB::select("select id,gender from tbl_gender");
        return view('student.add-new-student', compact('gender'));
    }
}

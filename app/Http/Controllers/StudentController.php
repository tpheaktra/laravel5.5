<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public  function  addNewStudent(){
        return view('student.add-new-student');
    }
}

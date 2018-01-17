<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\StudentModel;
class StudentController extends Controller
{
    public  function  addNewStudent(){
        $gender = DB::select("select id,gender from tbl_gender");
        $relationship = DB::select("select id, relationship from tbl_relationship");
        $nationality = DB::select("select id, nationality from tbl_nationality");
        return view('student.add-new-student', compact('gender','relationship','nationality'));
    }


    public function PostInsertStudent(request $request){
        $student = new StudentModel();
     //  $student = $request->all();
       $student->name_khmer = $request->name_khmer;
      $student->name_latin = $request->name_latin;
       $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->gender_id = $request->gender;
        $student->relationship_id=$request->relationship;
        $student->date_of_birth=$request->date_of_birth;
        $student->nationality=$request->nationality;
        $student->province_id=$request->province_id;
        $student->district_id=$request->district_id;
        $student->commune_id=$request->commune_id;
        $student->village_id=$request->village_id;
        $student->address=$request->address;
        $student->save();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function ShowSchools(){
        $schools = School::all();

        return view('index',['schools'=>$schools]);
    }

    public function ShowSchoolInfo($school_id){
        $school=School::find($school_id);
        $teachers=School::find($school_id)->teachers;
        $images=School::find($school_id)->images;
        $reviews=School::find($school_id)->reviews;

        return view('ShowSingleSchool',compact('school','teachers','images','reviews'));

    }
}

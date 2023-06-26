<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Subjects;
use App\Models\Subjectsdr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //

    public function index()
    {
        $id = Auth::user()->id;
        $sub = Subjectsdr::all();
        return view("doctor.list")->with("subjects", $sub)->with("id", $id);
    }


    public function store($subject_name)
    {
        $id = Auth::user()->id;
        $subject_Name =$subject_name;
        $lectures = Lecture::where('subject_name', $subject_Name)->get();
        return view("doctor.store")->with("subject_name",$subject_Name)->with("lectures", $lectures);

    }

    public function save(Request $request)
    {
        $id = Auth::user()->id;
        $file = $request->file('file');
        $subject_name=$request->get('subject_name');

        $subject = Subjects::where('subject_name', $subject_name)->first();
        $subject_code = $subject->subject_code;
        $lecture_name = $file->getClientOriginalName();
        $updatedLectureName = time() . '_' . $lecture_name;

        $file->move('lectures', $updatedLectureName);

        $lecture = new Lecture;
        $lecture->lecture_name = $updatedLectureName;
        $lecture->subject_name = $subject_name;
        $lecture->subject_code = $subject_code;
        $lecture->doctor_id = $id ;

        $lecture->save();
    }





}

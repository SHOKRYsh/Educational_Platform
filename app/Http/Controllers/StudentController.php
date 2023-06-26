<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\PassSubjects;
use App\Models\studentSubjects;
use App\Models\Subjects;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //

    public function index()
    {
        $id = Auth::user()->id;
        $subject=Subjects::all();
        $passed = PassSubjects::where('student_id', $id)->get();
        $student_subject =studentSubjects::where('student_id', $id)->get();
        return view("student.list")->with('subjects', $subject)->with('passed', $passed)->with("student_subjects",$student_subject);
    }


    public function add(String $subject_code)
    {
        $id = Auth::user()->id;
        $student_subjects = new studentSubjects;
        $student_subjects->student_id = $id;
        $student_subjects->subject_code = $subject_code;

        $student_subjects->save();
        return redirect()->back()->with('success', 'Congratulation ,The Subject is Added.');
    }

    public function destroy(String $subject_code)
    {
        $student_subject = studentSubjects::where('subject_code', $subject_code)->first();

        if ($student_subject) {
            $student_subject->delete();
            return redirect()->back()->with('delete', 'Oops! The Subject is Deleted.');
        } else {
            return redirect()->back()->with('error', 'Subject not found.');
        }
    }


    public function showUserSubjects()
    {

        $subjects=Subjects::all();
        $student_subjects=studentSubjects::all();
        return view("student.showStudentSubjects")->with("student_subjects",$student_subjects)->with("subjects",$subjects);

    }


    public function showSubjectLectures($subject_name)
    {
        $lectures = Lecture::where('subject_name', $subject_name)->get();
        return view("student.showlecture", ['lectures' => $lectures, 'subject_name' => $subject_name]);
    }








}




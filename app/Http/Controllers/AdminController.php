<?php

namespace App\Http\Controllers;

use App\Models\Academics;
use App\Models\Departments;
use App\Models\studentSubjects;
use App\Models\Subjects;
use App\Models\Subjectsdr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create_account()
    {
        $subject =Subjects::all();
        return view('admin.account')->with('subjects',$subject);
    }

    public function store_account(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => 'required',
            'academic_number',
            'garde'
         ]);


         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->user_type = $request->user_type;

         $user->save();

         if ($user->user_type == 'student') {
            $academics = new Academics();
            if ($request->academic_number == '' &&$request->grade == '' ) {
                return redirect()->back()->with('delete', 'The Academic Number is Null !! Please Check This Field Again..');
            } else {
                $academics->user_id = $user->id;
                $academics->academic_number = $request->academic_number;
                $academics->grade = $request->grade;
                $academics->save();
            }
        }
        else
        {

            $selectedOptions = $request->input('check_subjects');
            foreach ($selectedOptions as $option) {
                $sub=new Subjectsdr();
                $sub->doctor_id = $user->id;
                $sub->subject_name=$option;
                $sub->save();
            }


        }
        return redirect()->back()->with('success', 'Congratulation ,The Account has been created.');
    }

    public function create_dept()
    {
        return view('admin.dept');
    }


    public function store_dept(Request $request)
    {
        $this->validate($request, [
            'department_name' => 'required|unique:departments',
            'department_code' => 'required|unique:departments',
        ]);

        $department = new Departments();
        $department->department_code = $request->department_code;
        $department->department_name = $request->department_name;
        $department->save();

        return redirect()->back()->with('success', 'Congratulations! The Department has been added.');
    }

    public function create_subject()
    {
        $department =Departments::all();

        return view('admin.subject')->with('departments',$department);
    }

    public function store_subject(Request $request)
{
    $this->validate($request, [
        'subject_code' => 'required|unique:subjects',
        'subject_name' => 'required|unique:subjects',
        'radio_depts' => 'required',
        'prequisite'
    ]);

    $subject = new Subjects();
    $subject->subject_code = $request->subject_code;
    $subject->subject_name = $request->subject_name;
    $subject->related_department = $request->radio_depts;
    $subject->prequisite = $request->prequisite;
    $subject->save();

    return redirect()->back()->with('success', 'Congratulations! The Subject has been added.');
}



    public function showAbsence()
    {
        $subjects=Subjects::paginate(6);
        $studentSubjects=studentSubjects::all();
        return view("admin.absence")->with("subjects",$subjects)->with("studentSubjects",$studentSubjects);
    }


    public function showAbsenceSubjectCode($subject_code)
    {
        $students=studentSubjects::where('subject_code', $subject_code)->get();
        $users=User::all();
        return view("admin.showStudents")->with("students",$students)->with("users",$users);
    }







}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (Auth::check())
                    @if (Auth::user()->user_type === 'administrator')

                    <h1 style="text-align: center">
                        {{ Auth::user()->name }}
                    </h1>
                    <hr>

                    <div class="container">
                        <h2 class="text-center mt-5">Faculty Management System</h2>
                        <p class="lead text-center">The administrator plays a crucial role in overseeing the operations and managing
                            various aspects of the faculty.</p>

                        <h3 class="mt-5">I. Department Management:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/departments" style="text-decoration: none ">
                                    <h4>Adding Departments:</h4>
                                </a>
                                <ul>
                                    <li>The administrator can create new departments within the faculty management system.</li>
                                    <li>They can specify department details such as name, code, description, etc.</li>
                                    <li>The created departments can be associated with relevant faculty members and subjects.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">II. Subject Management:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/subjects" style="text-decoration: none ">
                                    <h4>Adding Subjects:</h4>
                                </a>
                                <ul>
                                    <li>The administrator has the authority to add new subjects offered by the faculty.</li>
                                    <li>They can input subject information like name, code, description, credits, etc.</li>
                                    <li>The subjects can be assigned to the respective departments.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">III. User Account Management:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/accounts" style="text-decoration: none ">
                                    <h4>Creating Doctor Accounts:</h4>
                                </a>
                                <ul>
                                    <li>The administrator can create user accounts for doctors/professors in the faculty.</li>
                                    <li>They input the necessary details like name, email, password, etc.</li>
                                    <li>Doctor accounts can be associated with specific departments and subjects they teach.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <a href="/accounts" style="text-decoration: none ">
                                    <h4>Creating Student Accounts:</h4>
                                </a>
                                <ul>
                                    <li>The administrator is responsible for creating user accounts for students.</li>
                                    <li>They provide details like name, email, password, enrollment number, etc.</li>
                                    <li>Student accounts are associated with their respective departments and enrolled subjects.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">IV. Absence Management:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/abscence" style="text-decoration: none ">
                                    <h4>Generating Absence Records:</h4>
                                </a>
                                <ul>
                                    <li>The administrator has the capability to generate absence records for each subject.</li>
                                    <li>They can access student attendance data and generate absence reports accordingly.</li>
                                    <li>The system allows the administrator to specify the date, subject, and students' absence status.
                                    </li>
                                    <li>Generated absence records can be used for further analysis and reporting.</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    @endif

                    @if (Auth::user()->user_type === 'doctor')

                    <h1 style="text-align: center">
                        {{ Auth::user()->name }}
                    </h1>
                    <hr>

                    <div class="container">
                        <h2 class="text-center mt-5">Role of a Doctor in the Educational Platform</h2>
                        <p class="lead text-center">As a doctor in the educational platform, you play a crucial role in imparting
                            knowledge and guiding students in their academic journey. Your responsibilities revolve around managing
                            courses, interacting with students, and assessing their progress.</p>

                        <h3 class="mt-5">Course Management:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>You can create and upload course materials such as lecture notes, presentations, and reading
                                        materials.</li>
                                    <li>Organize and make these materials easily accessible to your students within the platform.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Interaction with Students:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Conduct lectures, facilitate discussions, and provide guidance to students.</li>
                                    <li>Address student queries, clarify concepts, and create a positive learning environment.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Assessing Student Progress:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Review and grade student submissions, assignments, quizzes, and exams.</li>
                                    <li>Provide constructive feedback to guide students' learning process.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Exam Creation:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Create exams, set their structure, and define timing and question types.</li>
                                    <li>Option to randomize the order of questions for fairness and prevention of cheating.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Grading and Feedback:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Assign grades based on student performance and provide feedback.</li>
                                    <li>Help students understand their strengths and areas for improvement.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Monitoring Attendance:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Access student attendance records to monitor regularity in attending classes.</li>
                                    <li>Identify students who may need additional support or intervention.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Collaboration and Professional Development:</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Engage in collaboration with other faculty members to share best practices.</li>
                                    <li>Participate in professional development activities to enhance teaching skills.</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    @endif

                    @if (Auth::user()->user_type === 'student')
                    <h1 style="text-align: center">
                        {{ Auth::user()->name }}
                    </h1>
                    <hr>
                    <div class="container">
                        <h3 class="mt-5">Student Registration in a Subject </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Display a list of subjects available for registration.</li>
                                    <li>Allow the student to register for a subject if they have successfully passed the prerequisitesubjects.</li>
                                    <li>Handle the registration process and update the database accordingly.</li>
                                </ul>
                            </div>
                        </div>


                        <h3 class="mt-5">Student Registration in a Subject </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Display a list of subjects available for registration.</li>
                                    <li>Allow the student to register for a subject if they have successfully passed the prerequisitesubjects.</li>
                                    <li>Handle the registration process and update the database accordingly.</li>
                                </ul>
                            </div>
                        </div>



                        <h3 class="mt-5">File Upload for a Subject </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Provide a file upload functionality for each subject that the student is enrolled in.</li>
                                    <li>Allow the student to upload files related to the subject.</li>
                                    <li>Store the uploaded files securely and associate them with the respective subject..</li>
                                </ul>
                            </div>
                        </div>




                        <h3 class="mt-5">View Grades for a Subject</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Display the student's grades for both previous subjects and subjects they are currently studying.</li>
                                    <li>Provide a consolidated view of the student's grades, including the subject name and corresponding grade.</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-5">Examinations and Quizzes</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Allow the student to access and take exams and quizzes for the subjects they are currently studying.</li>
                                    <li>PProvide an interactive interface for answering questions and submitting the responses.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    @endif
                    @endif

                    @endsection

@extends('layouts.app')

@section('content')


<style>
    .square-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .image-container img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .subject-name {
        margin-top: 10px;
    }
    </style>

<div class="container">
    <div class="card" >

        <div class="card-body">
            <div class="row">

        @foreach ($student_subjects as $student_subject)
            <div class="col-md-4 mb-4">
                <div class="square-container">
                    <a style="text-decoration:none;color: black" href="/studentt/showSubjectLectures/{{ $student_subject->subject->subject_name }}">
                        <img src="/photos/course.jpeg" class="img-thumbnail" style="width:100%;height:100%">
                        <h1 style="text-align: center;font-size: 20px">{{ $student_subject->subject->subject_name }}</h1>
                    </a>
                </div>
            </div>
        @endforeach
            </div></div>
    </div>
</div>




@endsection

{{-- @extends('Layouts.app')

@section('content')
    <h1 style="text-align: center">Subjects</h1>
    <hr>
    @if (count($subjects) > 0)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @foreach ($subjects as $subject)
                        @if ($id==$subject->doctor_id)
                            <div class="col-md-4 col-sm-6">
                                <a style="text-decoration:none;color: black" href="/doctor/lecture/{{ $subject->subject_name }}">
                                    <img src="/photos/course.jpg" class="img-thumbnail" style="width:100%;height:100%">
                                    <h1 style="text-align: center;font-size: 20px">{{ $subject->subject_name }}</h1>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>No Subjetcs Available</p>
    @endif
@endsection --}}


@extends('Layouts.app')

@section('content')
<div class="container"></div>
    <h1 style="text-align: center ;color: rgb(39, 105, 85); font-size: 40px ;font-weight: bold;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >Subjects</h1>
    <hr>
    @if (count($subjects) > 0)

        <div class="card" >

            <div class="card-body">

                <div class="row">
                    @foreach ($subjects as $subject)
                        @if ($id==$subject->doctor_id)
                            <div class="col-md-4 col-sm-4" >
                                {{-- <div class="card-title"> --}}
                                    <a style="text-decoration:none;color: black" href="/doctor/lecture/{{ $subject->subject_name }}">
                                        <img src="/photos/course.jpeg" class="img-thumbnail" style="width:80%">
                                        {{-- <h1 style="text-align: center;font-size: 20px">{{ $subject->subject_name }}</h1> --}}
                                    </a>
                                {{-- </div> --}}
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-title">
                                    <a style="text-decoration:none;color: black" href="/doctor/lecture/{{ $subject->subject_name }}">
                                        {{-- <img src="/photos/course.jpg" class="img-thumbnail" style="width:100%;height:100%"> --}}
                                        <h1 style="text-align: center;font-size: 30px ; padding-top: 20px ; color: rgb(39, 105, 85)">{{ $subject->subject_name }}</h1>
                                    </a>
                                </div>
                            </div>
                            <hr style="margin: 7px -1px ">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>No Subjetcs Available</p>
    @endif
@endsection

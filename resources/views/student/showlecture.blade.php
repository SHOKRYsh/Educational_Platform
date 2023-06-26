@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 style="text-align: center;color: rgb(39, 105, 85);">{{ $subject_name }}</h2>
                </div>
                <div class="card-body">
                    @if (count($lectures) > 0)
                        <ul class="lecture-list">
                            @foreach ($lectures as $lecture)
                                @php
                                    $lecturePath = "/lectures/" . $lecture->lecture_name;
                                @endphp
                                <li class="lecture-item">
                                    <span class="lecture-name">{{ $lecture->lecture_name }}</span>
                                    <br>
                                    <a href="{{ $lecturePath }}" download class="download-link" >Download PDF</a>
                                    <hr class="lecture-divider">
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div >
                            <h5 style="text-align: center;color: rgb(39, 105, 85);">Oops, There are no lectures yet...</h5>
                            <h4 style="text-align: center;color: rgb(39, 105, 85);">Come again :)</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
    <style>
        .lecture-list {
            list-style: none;
            padding: 0;
        }

        .lecture-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .lecture-name {
            font-size: 18px;
            flex-grow: 1;
        }

        .lecture-divider {
            margin-top: 10px;
            margin-bottom: 10px;
            border: none;
            border-top: 1px solid #ccc;
        }


    </style>
@endsection

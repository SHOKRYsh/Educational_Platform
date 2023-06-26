@extends('Layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.css">
@endsection

@section('content')
    <div class="container">
        <h1 style="text-align: center ;color: rgb(39, 105, 85); font-size: 40px ;font-weight: bold;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >
            Upload Lectures To {{ $subject_name }}</h1>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <!-- Left side content -->
                {!! Form::open([
                    'action' => ['App\Http\Controllers\DoctorController@save', 'subject_name' => $subject_name],
                    'method' => 'post',
                    'files' => true,
                    'class' => 'dropzone',
                ]) !!}

                {!! Form::close() !!}
            </div>

            <div class="col-md-6">
                <!-- Right side content -->
                <h2 style="color: rgb(39, 105, 85)">Lectures Uploaded</h2>
                @if (count($lectures) > 0)
                <ul>
                    @foreach ($lectures as $lecture)
                        <li style="font-size: 20px ;font-weight: italic;">{{ $lecture->lecture_name }}</li>
                        <hr>
                    @endforeach
                </ul>
                 @else
                <p style="font-size: 20px">No lectures uploaded yet :(</p>
                @endif
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js"></script>
@endsection

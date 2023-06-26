@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('accounts.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{--  --}}
                            <div class="row mb-3">
                                <label for="user_type"
                                    class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_type" id="doctor"
                                            value="doctor" required>
                                        <label class="form-check-label" for="doctor">
                                            Doctor
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_type" id="student"
                                            value="student" required>
                                        <label class="form-check-label" for="student">
                                            Student
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3" id="academicNumberContainer" style="display: none;">
                                <label for="academic_number"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Academic Number') }}</label>

                                <div class="col-md-6">
                                    <input id="academic_number" type="number" class="form-control" name="academic_number">
                                </div>
                            </div>

                            <div class="row mb-3" id="gradeContainer" style="display: none;">
                                <label for="grade"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Grades') }}</label>

                                <div class="col-md-6">
                                    <input id="grade" type="number" class="form-control" name="grade">
                                </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('input[name="user_type"]').change(function() {
                                        if ($('#student').is(':checked')) {
                                            $('#academicNumberContainer').show();
                                            $('#gradeContainer').show();
                                        } else {
                                            $('#academicNumberContainer').hide();
                                            $('#gradeContainer').hide();
                                        }
                                    });
                                });
                            </script>



                            <div class="row mb-3" id="checkbox" style="display: none;">
                                <label for="subject"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Available Subjects') }}</label>

                                <div class="col-md-6">
                                    @foreach ($subjects as $subject)
                                        <div class="form-check">
                                            @if ($subject->subject_name == '')
                                            @else
                                                <input class="form-check-input" type="checkbox" name="check_subjects[]"
                                                    id="{{ $subject->id }} " value="{{ $subject->subject_name }}">
                                                <label class="form-check-label" for="{{ $subject->id }} ">
                                                    {{ $subject->subject_name }}</label>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('input[name="user_type"]').change(function() {
                                        if ($('#doctor').is(':checked')) {
                                            $('#checkbox').show();
                                        } else {
                                            $('#checkbox').hide();
                                        }
                                    });
                                });
                            </script>

                            {{--  --}}
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

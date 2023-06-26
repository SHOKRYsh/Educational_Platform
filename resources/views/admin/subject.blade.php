@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Subjects') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('subjects.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="code"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Subject Code') }}</label>

                                <div class="col-md-6">
                                    <input id="subject_code" type="text" class="form-control" name="subject_code"
                                        autofocus>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Subject Name') }}</label>

                                <div class="col-md-6">
                                    <input id="subject_name" type="text" class="form-control " name="subject_name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="related_dept"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Related Department') }}</label>

                                <div class="col-md-6">
                                    @foreach ($departments as $department)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio_depts"
                                                id="{{ $department->id }} " value="{{ $department->department_name }}" >
                                            <label class="form-check-label" for="{{ $department->id }} ">
                                                {{ $department->department_name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="preq"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Prequisite') }}</label>

                                <div class="col-md-6">
                                    <input id="prequisite" type="text" class="form-control " name="prequisite">
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add') }}
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

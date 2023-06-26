@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Departments') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('depts.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="code"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Department Code') }}</label>

                                <div class="col-md-6">
                                    <input id="department_code" type="text" class="form-control" name="department_code"
                                        autofocus>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Department Name') }}</label>

                                <div class="col-md-6">
                                    <input id="department_name" type="text" class="form-control " name="department_name">
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
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

@extends('layouts.app')

@section('content')

<div class="card-body">
    {{-- <h1 class="mt-4 mb-3"></h1> --}}
    <h1 style="text-align: center ;color: rgb(39, 105, 85); font-size: 40px ;font-weight: bold;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" >Subjects Available for You</h1>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>Subject Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                @if (!$passed->contains('subject_code', $subject->subject_code))
                    @if ($subject->prequisite == "" || $passed->contains('subject_code', $subject->prequisite))
                        <td>{{ $subject->subject_name }}</td>
                        <td>
                            @if ($student_subjects->contains('subject_code', $subject->subject_code))
                                <a href="/student/delete/{{ $subject->subject_code }}" class="btn btn-outline-danger">Delete</a>
                            @else
                                <a href="/student/{{ $subject->subject_code }}" class="btn btn-outline-secondary">Add</a>
                            @endif
                        </td>
                    @endif
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

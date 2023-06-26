@extends('layouts.app')

@section('content')

<div class="card-body">
    <h1 class="mt-4 mb-3">Students</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>
                    @foreach ( $users as $user )
                        @foreach ($students as $student)
                            @if($user->id==$student->student_id)
                                <li>{{ $user->name}}</li>
                            @endif
                        @endforeach
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- {{ $students->links('pagination::bootstrap-5') }} --}}
@endsection

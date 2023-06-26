@extends('layouts.app')

@section('content')

<div class="card-body">
    <h1 class="mt-4 mb-3">Subjects</h1>
    <table class="table table-striped">
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td>
                    <h3 style="text-align: center"><a style="text-decoration: none" href="/abscence/{{ $subject->subject_code }}">{{ $subject->subject_name }}</a></h3>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $subjects->links('pagination::bootstrap-5') }}
@endsection

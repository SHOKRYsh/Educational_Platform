@extends('layouts.app')


@section('content')
    <div class="jumbotron text-center" style="background: rgb(230, 229, 229) ; border-radius: 20px ;padding: 10px 5px 40px">
        <h1 style="font-size: 3.5rem;">Welcome To home</h1>
        <p class="lead" style="font-size: 23px">An educational platform is a digital tool that provides a variety of educational resources and learning opportunities to users. These platforms can be used by students, teachers, and other education professionals to enhance their learning experience, connect with peers, and access high-quality educational resources.

            An educational platform typically offers a range of features, including online courses, webinars, forums, quizzes, and assessments. These features are designed to promote interactive learning and enable users to learn at their own pace, in their own time.

            One of the key benefits of educational platforms is that they offer flexibility and convenience. Users can access educational resources and courses from anywhere, at any time, using a computer, tablet, or mobile device. This makes learning more accessible to people who may not have access to traditional classroom settings.

            Educational platforms also provide a wealth of learning resources that may not be available in traditional classroom settings. They can offer a range of courses and topics, from basic skills to advanced knowledge, and can be tailored to suit individual learning styles and preferences.

            Overall, an educational platform is a powerful tool for both students and educators, providing a flexible and accessible way to enhance learning and improve educational outcomes.


        </p>
        <hr>
    </div>
    @if(!Auth::user())
    <div class="jumbotron text-center">
        <a href="/login" class="btn btn-success">Login</a>
        {{-- <a href="/register" class="btn btn-primary">Register</a> --}}
    </div>
    @endif
@endsection

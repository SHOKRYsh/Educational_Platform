 <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="margin-bottom: 20px;colo" >
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>

                    @if (Auth::check())
                        @if (Auth::user()->user_type === 'administrator')
                        <li class="nav-item">
                            <a class="nav-link" href="/department">Add Department</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/subject">Add Subject</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/accounts">Make Accounts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/abscence">Absence</a>
                        </li>


                        @endif
                    @endif

                    @if (Auth::check())
                        @if (Auth::user()->user_type === 'doctor')
                        <li class="nav-item">
                            <a class="nav-link" href='/doctor'>List Subjects</a>
                        </li>
                        @endif
                    @endif

                    @if (Auth::check())
                        @if (Auth::user()->user_type === 'student')
                        <li class="nav-item">
                            <a class="nav-link" href='/student'>Enroll Subjects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='/studentt/showUserSubjects'>List My Subjects</a>
                        </li>
                        @endif
                    @endif

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

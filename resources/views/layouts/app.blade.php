<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset("image\logo.png")}}" style="width:52px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li clas="nav-item my" style="height: 30px;">
                            <a href="{{ route('show-roadmap') }}" style="padding: 8px">Roadmap</a>
                        </li>
                        <li class="nav-item dropdown ml-2">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('courses') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Course
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">C</a>
                                <a class="dropdown-item" href="#">C++</a>
                                <a class="dropdown-item" href="#">Java</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                                    <a class="dropdown-item" href="{{url('/user/profile') . '/' . Auth::id()}}">Profile</a>
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
        </nav> --}}

        <div class="customNavbar w-100">
            <div class="row mx-0 my-custom-nav justify-content-start align-items-center">
                <div class="ml-5 col-lg-1 col-md-2">
                    <a href="#">
                        <img src="{{ asset('image/logo.png') }}" width="80px">
                    </a>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-6">
                    <div class="btn-group">
                        <a href="{{ route('show-roadmap') }}" id="courses">Roadmap</a>
                    </div>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-6">
                    <a href="{{ route('courses') }}" id="courses">Courses</a>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-6">
                    <a href="{{ route('list-post') }}" id="forms">Post</a>
                </div>
                @guest
                    <div class="col-lg-1 offset-lg-5 col-md-1 offset-md-1 col-sm-6 btn btn-success">
                        <a href="{{ route('login') }}" style="text-decoration: none; color: white;">Login</a>
                    </div>
                    @if (Route::has('register'))
                        <div class="col-lg-1 ml-1 col-md-1 col-sm-6 btn btn-success">
                            <a href="{{ route('register') }}" style="text-decoration: none; color: white;">Register</a>
                        </div>
                    @endif
                @else
                    <div class="col-lg-7 col-md-6 col-sm-6 text-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                                <a class="dropdown-item" href="{{url('/user/profile') . '/' . Auth::id()}}">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </div>

        <main style="padding-top: 150px;">
            @yield('content')
        </main>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
                            <li><a href="#">C Programming</a></li>
                            <li><a href="#">Civil Engineering</a></li>
                            <li><a href="#">Catering Courses</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>WEOS</h3>
                        <p>WEOS is an online learning web that helps students who have difficulty learning their course material due to the difficulty of independent and unstructured learning. </p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">WEOS © 2021</p>
            </div>
        </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

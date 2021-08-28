@extends('layouts.app')

@section('content')
{{-- <div class="container" style="margin-top:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="list-button d-flex flex-column text-center mr-3">
                    <a href="{{ route('form-post') }}" name="form-page"
                        class="btn btn-primary text-white mb-3 ml-3" class="a">Create New Discussion</a>
                    <a href="{{ route('my-post') }}" name="form-page"
                        class="btn btn-primary text-white mb-3 ml-3" class="a">Show My Post</a>
                    <a href="{{ route('list-post') }}" name="form-page"
                        class="btn btn-primary text-white mb-3 ml-3" class="a">Show All Post</a>
                    <a href="{{ route('show-roadmap') }}" name="form-page"
                        class="btn btn-primary text-white mb-3 ml-3" class="a">Show Roadmap</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset("image/0.png") }}" class="d-block w-50 gambar" alt="#">
            <div class="carousel-caption d-none d-md-block" style="color:black; font-weight: bold;" >
            <h5 >C Programming</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset("image/1.png") }}" class="d-block w-50 gambar" alt="#">
            <div class="carousel-caption d-none d-md-block" style="color:black; font-weight: bold;">
            <h5>C++ Programming</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
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
            <p class="copyright">WEOS © 2018</p>
        </div>
    </footer>
</div>
@endsection

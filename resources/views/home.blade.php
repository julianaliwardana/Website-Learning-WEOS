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
@endsection

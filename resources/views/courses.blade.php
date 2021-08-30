@extends('layouts.app')
@extends('layouts.auditorial')

@section('content')

@foreach ($profiles as $profile )
    @if(Auth::id() == $profile->user_id)
        @if($profile->learning_type == 'Kinestetik')
        <div class="container">
            <div class="row text-center">
                <h1>Kinestetik Course</h1>
            </div>
        </div>

        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center">Available Courses</h1>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/ux.jpg") }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UX Designer</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/civil.jfif") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Civil Engineering</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/c.png") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">C Programming</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @elseif($profile->learning_type == "Visual")
        <div class="container">
            <div class="row text-center">
                <h1>Visual Course</h1>
            </div>
        </div>

        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center">Available Courses</h1>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/") }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UX Designer</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/civil.jfif") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Civil Engineering</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/gamtek.jpg") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">C Programming</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @elseif($profile->learning_type == "Audiotorial")
        <div class="container">
            <div class="row text-center">
                <h1 class="text-primary">Audiotrial Course</h1>
            </div>
        </div>

        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h3 class="text-center mt-2" style="color: #4ca1fc">Available Courses</h3>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem">
                        <img src="{{ asset("image/ux.jpg") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UX Designer</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/civil.jfif") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Civil Engineering</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/c.png") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">C Programming</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- General --}}
        @else
        <div class="container">
            <div class="row text-center">
                <h1>General Course Course</h1>
            </div>
        </div>

        <div class="container d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center">Available Courses</h1>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/") }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UX Designer</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/civil.jfif") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Civil Engineering</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 20rem; height:20rem;">
                        <img src="{{ asset("image/gamtek.jpg") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">C Programming</h5>
                            <p class="card-text">5 Star</p>
                            <a href="#" class="btn btn-primary">View Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
@endforeach

@endsection

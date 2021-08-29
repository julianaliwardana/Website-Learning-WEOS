@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-center">Roadmap</h1>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card" style="width: 20rem; height:20rem;">
                    <img src="{{ asset("image/fullstack.png") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fullstack Developer</h5>
                        <p class="card-text">10 Kelas</p>
                        <a href="#" class="btn btn-primary">View Roadmap</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem; height:20rem;">
                    <img src="{{ asset("image/civil.jfif") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Civil Engineering</h5>
                        <p class="card-text">6 Kelas</p>
                        <a href="{{ route('civil-roadmap') }}" class="btn btn-primary">View Roadmap</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem; height:20rem;">
                    <img src="{{ asset("image/gamtek.jpg") }}" class="card-img-top" style="height: 10.6rem;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gambar Teknik</h5>
                        <p class="card-text">8 Kelas</p>
                        <a href="#" class="btn btn-primary">View Roadmap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

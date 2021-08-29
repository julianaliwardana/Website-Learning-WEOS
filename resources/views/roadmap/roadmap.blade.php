@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-center">Roadmap</h1>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fullstack Developer</h5>
                        <p class="card-text">10 Kelas</p>
                        <a href="#" class="btn btn-primary">View Roadmap</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Civil Engineering</h5>
                        <p class="card-text">5 Kelas</p>
                        <a href="#" class="btn btn-primary">View Roadmap</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Management Construction</h5>
                        <p class="card-text">8 Kelas</p>
                        <a href="#" class="btn btn-primary">View Roadmap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

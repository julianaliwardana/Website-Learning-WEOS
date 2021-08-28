@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-5 fw-bold">Make Your Own Post</h1>
    <div class="container d-flex align-items-center justify-content-center" style="margin-top:50px;">
        <div class="jumbotron">
            <form action="{{ route('get-post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Materi Courses</p>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter your courses">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Title</p>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="Enter your title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="mb-2 mt-4 fw-bold">Content</p>
                    <textarea name="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror"
                        placeholder="Enter your content"></textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <p class="mb-2 mt-4 fw-bold">Choose Image</p>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-3 mt-4"
                    onclick="alert('Terima kasih, artikel anda sudah kami save')" class="button">Submit</button>
            </form>
            <a href="{{ url('/home') }}" name="next-page" class="btn btn-primary text-white mb-5" class="a">Go
                to Home Page</a>
            <a href="{{ route('list-post') }}" name="next-page" class="btn btn-primary text-white mb-5" class="a">Go
                to Post Page</a>
        </div>
    </div>
@endsection

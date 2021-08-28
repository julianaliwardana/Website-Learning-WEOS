@extends('layouts.app')

@section('content')
<h1 class="text-center mt-5 fw-bold">Edit Post</h1>
<div class="container d-flex align-items-center justify-content-center" style="margin-top:50px;">
    <div class="jumbotron">
        <form action="{{url('/update-post') . '/' . $post->id}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <p class="mb-2 mt-4 fw-bold">Name</p>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name" value="{{$post->name}}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <p class="mb-2 mt-4 fw-bold">Title</p>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter your title" value="{{$post->title}}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <p class="mb-2 mt-4 fw-bold">Content</p>
                <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Enter your content" value="{{$post->content}}">
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
            <button type="submit" name="submit" class="btn btn-success mb-3 mt-4" onclick="alert('Terima kasih, artikel anda sudah kami update')" class="button">Update</button>
        </form>
        <a href="{{ route ('list-post') }}" name="next-page" class="btn btn-primary text-white" class="a">Back</a>
    </div>
</div>
@endsection

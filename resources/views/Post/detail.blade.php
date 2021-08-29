@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center text-center">
    <div class="row">
        {{-- @php(dd($viewPost->comments)) --}}
        <h1 class="text-primary">{{$viewPost->title}}</h1>
        <h4 class="mb-3" style="color: #4ca1fc">{{$viewPost->name}}</h4>
        <img src="{{ asset('upload/photo/' . $viewPost['image']) }}" class="mb-3 mx-auto" style="width:500px;">
        <p class="fs-5 text-black mb-5">{{$viewPost->content}}</p>
    </div>
</div>
@include('comment/read')
@yield('content2')
@include('comment/create')
@yield('content3')
@endsection

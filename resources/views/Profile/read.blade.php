@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center text-center">
    <div class="row">
        @foreach ($profiles as $profile)
            @if (Auth::id() === $profile->user_id)
                <h1>Hello My name is {{$profile->name}}</h1>
                <h4 class="mb-5"> My Birthday is {{$profile->date_of_birth}}</h4>
                <h4>My job is {{$profile->job}}</h4>
            @endif
        @endforeach
    </div>
</div>
@endsection


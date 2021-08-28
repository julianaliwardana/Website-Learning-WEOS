@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection

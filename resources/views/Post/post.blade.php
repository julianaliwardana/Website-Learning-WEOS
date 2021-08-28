@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="text-center fw-bold" style="margin-top:100px;">Forum Discussion</h1>
    <a href="{{ route('form-post') }}"><button class="btn btn-primary">Add Post</button></a>
</div>
<div class="container mt-5">
    @if (count($posts) === 0)
        <p>There are no posts!</p>
    @else
        @foreach ($posts as $post)
        <div class="post-thread d-flex justify-content-between">
            <div class="post-data p-3 text-center mt-3">
                <span class="important-text">128</span>
                <br>
                <span>Answers</span>
            </div>

            <span class="post-separator"></span>

            <div class="p-3 align-self-center">
                <p class="h5" style="font-weight: bold;">How to database in Java</p>
            </div>

            <div class="mt-4 p-3 text-right">
                <span class="important-text">USERNAME</span>
                <br>
                <span>27 Agustus 2021, 08:00 AM</span>
            </div>
        </div>
        @endforeach
    @endif
    {{-- <div class="row">
        <table class="table table-striped table-bordered align-middle d-flex align-items-center justify-content-center text-center my-auto " style="width:100%">
            <tr class="bg-secondary text-black">
                <th class="align-middle">Materi Courses</th>
                <th class="align-middle">Title</th>
                <th class="align-middle">Content</th>
                <th class="align-middle">Photo</th>
                <th class="align-middle">View Post</th>
            </tr>
            @foreach ($posts as $post)
            <tr class="bg-secondary bg-gradient text-white">
                <td class="align-middle">{{$post->name}}</td>
                <td class="align-middle">{{$post->title}}</td>
                <td class="align-middle">{{$post->content}}</td>
                <td class="align-middle"><img src="{{ asset('upload/photo/' . $post['image']) }}" style="width:300px;"></td>
                @if (Auth::user()->name === 'Admin')
                <td class="d-flex flex-column align-items-center align-middle" style="height: 500px;">
                    <a href="{{url('/view-post') . '/' . $post->id}}" name="next-page" class="btn btn-primary text-white my-auto">View</a>
                    <form action="{{url('/delete-post') . '/' . $post->id}}" method="POST" class="d-inline my-auto">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                @elseif(Auth::id() === $post->user_id)
                <td class="d-flex flex-column align-items-center align-middle" style="height: 500px;">
                    <a href="{{url('/view-post') . '/' . $post->id}}" name="next-page" class="btn btn-primary text-white my-auto">View</a>
                    <a href="{{url('/edit-post') . '/' . $post->id}}" name="next-page" class="btn btn-success text-white my-auto">Update</a>
                    <form action="{{url('/delete-post') . '/' . $post->id}}" method="POST" class="d-inline my-auto">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                @else
                <td class="d-flex flex-column align-items-center align-middle" style="height: 500px;">
                    <a href="{{url('/view-post') . '/' . $post->id}}" name="next-page" class="btn btn-primary text-white my-auto">View</a>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div> --}}
</div>
<div class="container text-center">
    <a href="{{ url('/home') }}" name="next-page" class="btn btn-primary text-white mt-3" style="width: 71%;">Go to Home Page</a>
</div>
@endsection


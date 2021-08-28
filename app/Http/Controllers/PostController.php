<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function index()
    {
        return view('Post\form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // echo "Anda sudah masuk";
        $request->validate([
            'name' => 'required | max:255',
            'title' => 'required | max:255',
            'content' => 'required',
            'image' => 'required'
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::id();

        // dd($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->extension();
            $filename = time() . '.' . $extension;
            $file->move('upload/photo/', $filename);
            $post->image = $filename;
        } else {
            return $request;
            $post->image = '';
        }

        $post->save();

        return redirect(url('/form-post'));
    }

    public function show()
    {
        $posts = Post::all();
        return view('Post\post', compact('posts'));
    }

    public function myPost()
    {
        $posts = Post::with('users')->orderBy('created_at', 'desc')->get();
        return view('Post\myPost', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detail($id)
    {
        $viewPost = Post::find($id);
        $comments = Comment::with('user')->get();
        // dd($comments);
        return view('Post\detail', compact('viewPost', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $post = Post::find($id);
        return view('Post\edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $request->validate([
            'name' => 'required | max:255',
            'title' => 'required',
            'content' => 'required | max:255'
        ]);

        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;

        $file = $request->file('image');
        $extension = $file->extension();
        $filename = time() . '.' . $extension;
        $file->move('upload/photo/', $filename);
        $post->image = $filename;

        $post->save();

        return redirect(url('/form-post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
    }
}

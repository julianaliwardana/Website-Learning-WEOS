<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function roadmap()
    {
        return view('Roadmap\roadmap');
    }

    public function courses() {
        $profiles = Profile::all();
        return view('courses', compact('profiles'));
    }
}

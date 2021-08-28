<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class UserController extends Controller
{
    public function create()
    {
        return view('Profile/createprofile');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // echo "Anda sudah masuk";
        $request->validate([
            'name' => 'required | max:255',
            'date_of_birth' => 'required | max:255',
            'job' => 'required',
            'type_learning' => 'required',
            'address' => 'required'
        ]);

        $profile = new Profile();
        $profile->name = $request->name;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->job = $request->job;
        $profile->learning_type = $request->type_learning;
        $profile->address = $request->address;
        $profile->user_id = Auth::id();

        $profile->save();

        return redirect(url('/home'));
    }
}

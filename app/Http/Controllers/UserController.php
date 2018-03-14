<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    //

    public function register(Request $request)
    {
        // get all inputs
        $inputs = $request->except('_token');

        $validator = Validator::make($inputs, [
            'email' => 'required|email',
            'username' => 'required|min:6',
            'password' => 'required|min:6',
            'profile_photo' => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // save the file
        $profile_photo = $request->file('profile_photo');
        $path = $profile_photo->store('profile_photo');

        // create user
/*        $db = User::create([
            'email' => trim($request->input('email')),
            'username' => trim($request->input('username')),
            'password' => bcrypt($request->input('password')),
            'profile_photo' => $path,
        ]);

        session()->flash('message', 'User registered successfully.');

        return redirect()->back();*/

    }

}

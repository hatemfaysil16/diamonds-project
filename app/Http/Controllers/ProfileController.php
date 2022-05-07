<?php

namespace App\Http\Controllers;

use Validator, Auth, Session;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update()
    {
        return view('profile.update');
    }

    public function postUpdate(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth()->user()->id]
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.update')->withErrors($validator);
        }

        Auth::user()->update($data);
        Session::flash('updated', 'Profile has been updated !');
        return redirect()->route('dashboard.update');
    }

    public function updatePassword()
    {
        return view('profile.update-password');
    }

    public function postUpdatePassword(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.update-password')->withErrors($validator);
        }

        Auth::user()->update($data);
        Session::flash('updated', 'Password has been updated !');

        return redirect()->route('dashboard.update-password');
    }

    public function cart()
    {
        return view('profile.cart');
    }

    public function bookings()
    {
        return view('profile.bookings');
    }
}

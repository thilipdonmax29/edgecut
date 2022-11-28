<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request) {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'phone'    => 'required',
            'address'  => 'required',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('login')->with('Success', 'Registration Completed, Now you can login');
    }

    function validate_login(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            if(Auth::user()->role_as == '1') //1= Admin 0=normaluser
            {
                return redirect('/admin/dashboard');

            }
            else {

                return redirect('/');
            }
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function home () {
        if(Auth::check()) {
            return view('/');
        }
        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('/');
    }
}

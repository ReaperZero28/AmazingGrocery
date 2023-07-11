<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(Request $req){

        $req->validate([
            'firstName' => 'required|alpha|max:25',
            'lastName' => 'required|alpha|max:25',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'role' => 'required',
            'image' => 'required|image',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|min:8|same:password',
        ]);

        $req->file('image')->storeAs('/public', $req->file('image')->getClientOriginalName());

        User::create([
            'firstName' => $req->firstName,
            'lastName' => $req->lastName,
            'genderId' => $req->gender,
            'email' => $req->email,
            'roleId' => $req->role,
            'displayPicture' => $req->file('image')->getClientOriginalName(),
            'password' => bcrypt($req->password),
        ]);

        return redirect('/login');
    }

    public function login(Request $req){
        $login = $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt($login)){

            return redirect('/home');
        }
        return back();
    }

    public function editProfile(Request $req){

        $req->validate([
            'firstName' => 'required|alpha|max:25',
            'lastName' => 'required|alpha|max:25',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'role' => 'required',
            'image' => 'required|image',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|min:8|same:password',
        ]);

        $req->file('image')->storeAs('/public', $req->file('image')->getClientOriginalName());

        User::find(Auth::user()->id)->update([
            'firstName' => $req->firstName,
            'lastName' => $req->lastName,
            'genderId' => $req->gender,
            'email' => $req->email,
            'roleId' => $req->role,
            'displayPicture' => $req->file('image')->getClientOriginalName(),
            'password' => bcrypt($req->password),
        ]);

        return view('savedProfile');
    }
}

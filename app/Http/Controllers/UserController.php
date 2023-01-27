<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show form
    public function create(){
        return view('users.register');
    }

    // new usser
    public function store(Request $request){
        $data= $request->validate([
            'name'=> 'required|max:255|alpha',
            'email'=> 'required|email',
            'password'=>'required|confirmed|min:6'

        ]);
        
        $data['password']=bcrypt($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
        

    }

    //logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    //show login
    public function login(){
        return view('users.login');
    }

    //authenticate
    public function authenticate(Request $request){

        $data= $request->validate([
            
            'email'=> 'required|email',
            'password'=>'required'

        ]);
        if(auth()->attempt($data)){
            $request->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors(['email'=>'Invalid credentils'])->onlyInput();
    }
}

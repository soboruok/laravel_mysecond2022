<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register create form
    public function create(){
        return view('users.register'); 
    }

    // Create New User
    public function store(Request $request){
        $formFields = $request->validate([
            // 최소3글자
            'name' => ['required', 'min:3'],
            // users테이블의 email필드는 유니크해야한다. 
            'email' => ['required', 'email', Rule::unique('users','email')],
            // password 와 password_confirmation을 confirmed됐는지 확인한다. 
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']); 

        //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('Success', 'User Created and logged in' );
        
    }

    //Logged User
    public function logout(Request $request){
        auth()->logout(); 

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('Success', 'You have been logged out' );
    }

    //Show Login form
    public function login(){
        return view('users.login');
    }
    
    //Authenticate User
    public function authenticate(Request $request){

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        //true라면, 
        if(auth()->attempt($formFields)){
            //세션을  regeneration
            $request->session()->regenerate();
            return redirect('/')->with('Success', 'You are now logged in' );
        }
        //if it fails,then error.
        return back()->withErrors(['email'=>'Invalid Credential'])->onlyInput('email');
    }
}

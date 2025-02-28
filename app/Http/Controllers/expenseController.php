<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class expenseController extends Controller
{
    public function index_page(){
        return view('index');
    }

    public function register_page(){
        return view('register');
    }

    public function submit(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $new_password = password_hash($password, PASSWORD_DEFAULT);
    
        User::create([
            'email' =>  $email,
            'name' =>  $name,
            'password' => $new_password,
        ]);
    
        return redirect('/login')->with(['message' => 'Registration successful! Please login.']);
    }

    public function login_page(){
        return view('login');
    }

    public function show_page(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        // Retrieve user by email
        $user = User::where('email', $email)->first();

        // Check if user exists and password is correct
        if ($user && password_verify($password, $user->password)) {
            return redirect('/index');
        } else {
            return redirect('/login')->with(['message' => 'Invalid email or password']);
        }
    }
}

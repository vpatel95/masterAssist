<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request) {

    	$this->validate($request, [
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:4'
    	]);

    	$email = $request['email'];
    	$password = $request['password'];

    	$user = new User();

    	$user->email = $email;
    	$user->password = bcrypt($password);
    	
        $email_t = ends_with($email, '@srmuniv.ac.in');
        $email_s = ends_with($email, '@srmuniv.edu.in');

            if($email_t)
                $user->category = 'teacher';
            else if($email_s)
                $user->category = 'student';

    	$user->save();

    	Auth::login($user);

       	return redirect()->route('dashboard');
    }

    public function login(Request $request) {

    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
    		return redirect()->route('dashboard');
    	}

    	return redirect()->back();
    }

    public function getDashboard() {

        $user = Auth::user();
        if($user->category == 'student') {
            return view('index', ['user' => $user]);
        } else if($user->category == 'teacher') {
            return view('index',['user' => $user]);
        }
    	
    }
}
    
<?php

namespace App\Http\Controllers;

use Log;
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

       	$user = Auth::user();
        $category = $user->getRole();
        if($category == 'student')
            return redirect()->route('student.fill');
        else
            return redirect()->route('teacher.fill');
    }

    public function login(Request $request) {

    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $user = Auth::user();
            $category = $user->getRole();
            if($category == 'student')
    		    return redirect()->route('student.fill');
            else
                return redirect()->route('teacher.fill');
    	}

    	return redirect()->back();
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }

    public function getDashboard() {

        $user = Auth::user();
        $category = $user->getRole();
        $uri = $category . '.dashboard';
        
        return view($uri, ['user' => Auth::user()]);

    }

    public function fillStudent() {
        $user = Auth::user();

        if($user->filled == 1)
            return redirect()->route('dashboard');
        else
            return view('student.getdata', ['user' => Auth::user()]);
    }

}
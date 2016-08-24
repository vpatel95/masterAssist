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
    		'password' => 'required|min:4',
    		'category' => 'required'
    	]);

    	$email = $request['email'];
    	$password = $request['password'];
    	$category = $request['category'];

    	$user = new User();

    	$user->email = $email;
    	$user->password = bcrypt($password);
    	$user->category = $category;

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
    	return view('index',['user' => Auth::user()]);
    }
}

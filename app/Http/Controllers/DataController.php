<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Auth;

use App\Http\Requests;

class DataController extends Controller {

	public function studentData(Request $request) {

		$student_id = $request['student_id'];
		$fname = $request['fname'];
		$lname = $request['lname'];
		$email = $request['email'];
		$branch = $request['branch'];
		$sem = $request['semester'];
		$year = $request['year'];
		$user_id = $request['user_id'];

		$user = User::find($user_id);
		$user->filled = 1;
		$user->save();

		$student = new Student();

		$student->student_id = $student_id;
		$student->first_name = $fname;
		$student->last_name = $lname;
		$student->email = $email;
		$student->branch = $branch;
		$student->year = $year;
		$student->semester = $sem;
		$student->user_id = $user_id;

		$student->save();

		return redirect()->route('dashboard');
	}
    
}

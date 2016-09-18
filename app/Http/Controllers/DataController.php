<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Student;
use App\Teacher;
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

	public function teacherData(Request $request) {

		$teacher_id = $request['teacher_id'];
		$fname = $request['fname'];
		$lname = $request['lname'];
		$branch = $request['branch'];
		$designation = $request['designation'];
		$email = $request['email'];
		$user_id = $request['user_id'];

		$user = User::find($user_id);
		$user->filled = 1;
		$user->save();

		$teacher = new Teacher();

		$teacher->teacher_id = $teacher_id;
		$teacher->first_name = $fname;
		$teacher->last_name = $lname;
		$teacher->email = $email;
		$teacher->user_id = $user_id;
		$teacher->branch = $branch;
		$teacher->designation = $designation;

		$teacher->save();

		return redirect()->route('dashboard');
	}
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Teacher;
use App\Http\Response;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function teacherShow($id) {
    	$teacher = Teacher::where('teacher_id', $id)->first();

    	return $teacher->first_name;
    }

    public function studentShow($id) {
    	$student = Student::where('student_id', $id)->first();

    	return $student->first_name;
    }
}

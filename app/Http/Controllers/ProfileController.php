<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Teacher;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function teacherShow($id) {
    	$teacher = Teacher::where('teacher_id', $id);

    	return($teacher->first_name);
    }

    public function studentShow($id) {

    }
}

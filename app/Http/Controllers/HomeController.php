<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::user()->hasrole('admin')){
            return view('admin.dashboard');
        }
        elseif(Auth::user()->hasrole('student')){
            return view('student.dashboard');
        }
        elseif(Auth::user()->hasrole('teacher')){
            return view('teacher.dashboard');
        }
        elseif(Auth::user()->hasrole('accountant')){
            return view('accountant.dashboard');
        }
    }
}

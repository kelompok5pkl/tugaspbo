<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Student()
    {
    	return view('admin');
    }
}

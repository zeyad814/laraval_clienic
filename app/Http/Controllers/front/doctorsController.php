<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class doctorsController extends Controller
{
    public function index() {
        return view('front.pages.doctors.index');
    }
    public function show(){
        return view('front.pages.doctors.show');
    }
}

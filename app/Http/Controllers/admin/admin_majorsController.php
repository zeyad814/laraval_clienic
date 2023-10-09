<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_majorsController extends Controller
{
    public function index(){
        return view('admin.pages.majors.index');
    }
}

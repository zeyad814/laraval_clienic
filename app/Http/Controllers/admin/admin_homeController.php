<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_homeController extends Controller
{
    public function index(){
        return view('admin.pages.home.index');
    }
}

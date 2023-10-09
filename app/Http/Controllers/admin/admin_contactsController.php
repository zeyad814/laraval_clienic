<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_contactsController extends Controller
{
    public function index(){
        return view('admin.pages.contacts.index');
    }
}

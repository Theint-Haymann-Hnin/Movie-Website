<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function landing(){
       return view('Admin.landing');
    }
}

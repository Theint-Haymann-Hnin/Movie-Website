<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        return view('Admin.navigation.index');
    }
    public function latestkoreanseries()
    {   
        return view('Admin.navigation.latestkoreanseries');
    }
    
    public function navmovie()
    {
        return view('Admin.navigation.navmovie');
    }
    
    public function latestmovie()
    {
        return view('Admin.navigation.latestmovie');
    }
     
    public function latesthorrormovie()
    {
        return view('Admin.navigation.latesthorrormovie');
    }
    
    public function navcomingsoon()
    {
        return view('Admin.navigation.navcomingsoon');
    }
    
    public function latestcomedymovie()
    {
        return view('Admin.navigation.latestcomedymovie');
    }
    

}

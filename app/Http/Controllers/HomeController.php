<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $role =Auth::user()->role;
        if($role=='1')
        {
            return Inertia::render('Dashboard');
        }
//        if($role=='2')
//        {
//            return Inertia::render('ClubLeaders/Welcome');
//        }
        else
        {
            return Inertia::render('Welcome');
        }
    }
}

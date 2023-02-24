<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function checkUserType(){
        if (Auth::user()->role === 1){
            return redirect()->route('dashboard');
        }
        if (Auth::user()->role === 0){
            return  redirect(route('home.index'));
        }
        else
        {
            return redirect()->route('login');
        }
    }
}

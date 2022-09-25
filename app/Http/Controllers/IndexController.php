<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function kitchen()
    {
        if(User::find(Auth::user()->id)->hasRole('kitchen') || User::find(Auth::user()->id)->hasRole('admin')){
            return view('kitchenindex');
        } else {
            return redirect('/');
        }
    }
}

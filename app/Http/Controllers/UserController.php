<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.userindex');
    }

    public function create(Request $request)
    {
        // create method
        // return view only
    }
    
    public function store(Request $request)
    {
        // store method
        // saving user then redirect to show($id)
    }

    public function show($id)
    {
        // show method
    }

    public function destroy()
    {
        // delete method
    }
}

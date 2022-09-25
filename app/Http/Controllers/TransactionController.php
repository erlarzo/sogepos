<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('admin.transactionindex');
    }

    public function create(Request $request)
    {
        // create method
        // return view only
    }
    
    public function store(Request $request)
    {
        // store method
        // saving transaction then redirect to show($id)
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

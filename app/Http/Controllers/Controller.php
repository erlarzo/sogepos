<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function isAdmin()
    {
        $user_id = Auth::user()->id;
        $userrole = User::find($user_id)->getRole();
        if($userrole != 'admin')
            return redirect('home');
    }

    public function generateNameLabel($nameLabel)
    {
        $result = str_replace(' ','_', strtolower($nameLabel));

        return $result;
    }
}

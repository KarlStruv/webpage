<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $users->save();
            return redirect('/');
        }
        else return;
    }
}

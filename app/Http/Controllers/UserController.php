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
        $users->save();

        return redirect('/');
    }
}

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
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            return redirect('/sign-up')->with('message', 'Please enter a valid e-mail address!');
        }
        if (empty($_POST['name'])){
            return redirect('/sign-up')->with('message', 'Please enter a valid name!');
        } else {
            $users->save();
            return redirect('/sign-up')->with('message', 'You have successfully subscribed!!');
        }
    }
}

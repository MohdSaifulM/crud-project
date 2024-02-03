<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.index", ["users" => $users]);
    
    }

    public function register()
    {
        return view("users.register");
    }
    public function registerUser(Request $request)
    {
        $data = $request->validate([
            "username" => "required|min:3|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8|max:255",
        ]);

        $data["password"] = bcrypt($data["password"]);
        $newUser = User::create($data);

        if ($newUser) {
            return redirect()->route("user.index");
        } else {          
            return redirect()->route("user.register");
        }

    }
    public function edit(User $user)
    {
        return view("users.edit", ["user" => $user]);
    }
}

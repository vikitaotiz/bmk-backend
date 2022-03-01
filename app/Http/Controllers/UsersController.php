<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return User::with('role')->get();
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',
            'role_id' => 'required'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'role_id' => $fields['role_id'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}

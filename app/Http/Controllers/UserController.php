<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submitForm(Request $request) {
        $request->validate([
            'message' => 'required|string|max:255',
            'data' =>  'required|string|unique:users'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'User created successfully!',
            'data' => $user
        ],201);
    }
}

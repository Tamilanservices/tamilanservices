<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UsersService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public UsersService $userService;
    public function __construct(UsersService $userService)
    {
       $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|email|unique:users',
            'districts' => 'required',
        ]);

        $this->userService->store($request);
        
 
        // return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * This function to display form register
     */
    public function index() {
        return view('auth.register');
    }

    /**
     * This function to proccess the register data
     */
    public function store(Request $request) {
        // dd($request);

        $data = $request->validate([
            'email' => 'required|email',
            'name' => 'required|min:5|max:255',
            'password' => 'required|confirmed|min:8'
        ]);

        $data['password'] = Hash::make($data['password']);


        User::create($data);

        return redirect()->route('login');
    }
}

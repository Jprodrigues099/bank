<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'social_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed',
            'password_confirmation' => 'required|min:6|max:255',
            'cpf' => 'required|min:11|max:11|unique:users,cpf',
            'birthdate' => 'required|date',
            'phone' => 'required|min:11|max:11|unique:users,phone',
            'mothers-name' => 'required|min:5|max:255',
            'zipcode' => 'required',
            'address' => 'required',
            'address_complement' => 'required',
            'address_number' => 'required',
            'district' => 'required',
            'city' => 'required',
            'state' => 'required',
            'optin' => 'required|boolean'
        ]);

        $user = User::create($attributes);
        auth()->login($user);
        
        return redirect('/dashboard');
    } 
}

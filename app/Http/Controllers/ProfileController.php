<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('pages.profile');
    }

    public function update()
    {

        $user = request()->user();
        $attributes = request()->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
            'name' => 'required',
            'phone' => 'required|max:10',
            'about' => 'required:max:150',
            'location' => 'required'
        ]);

        auth()->user()->update($attributes);
        return back()->withStatus('Profile successfully updated.');

    }

    public function manageUsers(){

        $users = User::all();
        // $users = User::where('status','APROVADO')->get();
        return view('pages.laravel-examples.user-management', compact('users'));

    }

    public function approve(Request $request)
    {
        $user = $request->input('user');
        $user = User::find($user['id']);
        $user->status = 'APROVADO';
        $user->save();
        return response()->json(['message' => 'Conta atualizada', 'icon' => 'success']);

    }
    public function delete(Request $request)
    {
        $user = $request->input('user');
        $user = User::find($user['id']);
        $user->delete();
        return response()->json(['message' => 'Conta deletada', 'icon' => 'error']);

    }
}

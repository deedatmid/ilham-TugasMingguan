<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get(['id','name','email','last_login_at','created_at']);
        return view('users.index', compact('users'));
    }

    public function impersonate($id)
    {
        // Only allow impersonation in local environment for safety
        if (config('app.env') !== 'local') {
            abort(403);
        }

        $user = User::findOrFail($id);
        // login as the selected user
        auth()->login($user);
        return redirect('/mahasiswa')->with('status', 'Anda sekarang masuk sebagai: ' . $user->email);
    }

    public function publicIndex()
    {
        // Exclude admin accounts. Adjust condition as needed (here: email not like 'admin%')
        $users = User::where('email', 'not like', 'admin%')
            ->orderBy('created_at', 'desc')
            ->get(['id','name','email','last_login_at','created_at']);

        return view('users.public', compact('users'));
    }
}

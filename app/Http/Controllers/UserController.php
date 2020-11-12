<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'password' => ['required', 'min:12'],
        ]);

        $request->password = Hash::make($request->password);
        User::create($request->only(['name', 'email', 'password']));

        return Redirect::route('users.index');
    }
}

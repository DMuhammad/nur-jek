<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('pages.profile', compact('user'), ['title' => 'My Profile']);
    }
}

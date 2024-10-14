<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        // Join users dengan profiles menggunakan query builder
        $users = User::join('profiles', 'users.id', '=', 'profiles.user_id')
                     ->select('users.*', 'profiles.address', 'profiles.phone')
                     ->get();

        return view('users.index', compact('users'));
    }
}

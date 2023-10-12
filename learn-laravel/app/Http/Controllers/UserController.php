<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function show()
    // {
    //     return view('users')->with('username', 'ziad');
    // }
    // public function show()
    // {
    //     $data = [
    //         'username' => 'ziad',
    //         'age' => 28,
    //         'country' => 'port-said'
    //     ];
    //     return view('users')->with($data);
    // }
    public function show()
    {
        $data = [];
        return view('users', compact('data'));
    }
}

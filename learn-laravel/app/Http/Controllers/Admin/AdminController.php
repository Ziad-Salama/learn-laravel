<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index2');
    }
    public function index()
    {
        return "Hallow Admin";
    }
    public function index2()
    {
        return "Hallow Admin 2";
    }
    public function index3()
    {
        return "Hallow Admin 3";
    }

    public function show()
    {
        return 'show admin';
    }
}

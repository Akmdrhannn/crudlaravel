<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class isLogin extends Controller
{
    public function index()
    {
        return view('/logreg/login');
    }
}

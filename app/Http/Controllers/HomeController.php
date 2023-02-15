<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("content.home");
    }

    public function admin()
    {
        return view("content.admin");
    }
}

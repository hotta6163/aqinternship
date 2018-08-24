<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello1Controller extends Controller
{
    public function index()
    {
      return view("hello");
    }
}

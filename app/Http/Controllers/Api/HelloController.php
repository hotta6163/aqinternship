<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function all($id)
    {
      return "hello, world!" . $id;
    }
}

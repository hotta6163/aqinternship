<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GetdataController extends Controller
{
  public function all(): \Illuminate\Http\JsonResponse
  {
    $employee = DB::table("employees")->get();
    //dd($employee);
    //dd($employee["family_name"]);
    return response()->json($employee, 200, [], JSON_UNESCAPED_UNICODE);
  }
}

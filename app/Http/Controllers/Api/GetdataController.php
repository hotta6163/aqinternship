<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Beacon;

class GetdataController extends Controller
{
  public function all($family_name, $given_name): \Illuminate\Http\JsonResponse
  {

    $employees = Employee::where("family_name_kana", $family_name)
    ->where("given_name_kana", $given_name)->get()->first();
    //dd($employees);
    return response()->json($employees, 200);
  }
}

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
    $employees = DB::table("employees")->join("divisions", "divisions.division_id", "=", "employees.division_id")
->join("departments", "departments.department_id", "=", "divisions.department_id");
    $employees->join("beacons", "beacons.beacon_id", "=", "employees.beacon_id");
    $employees = $employees->where("family_name_kana", $family_name)->where("given_name_kana", $given_name)->get()->first();
    //dd($employees->adivision_name);
    return response()->json($employees, 200);
  }
}

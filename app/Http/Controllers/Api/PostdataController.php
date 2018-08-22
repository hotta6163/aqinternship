<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Beacon;

class PostdataController extends Controller
{
  public function all($family_name, $given_name, Request $request)#: \Illuminate\Http\JsonResponse
  {
    $major = $request->input("major");
    $minor = $request->input("minor");
    //dd($major, $minor);
    $beacon = Beacon::where("major", $major)->where("minor", $minor)->get()->first();
    //dd($beacon);
    $employee = Employee::where("family_name_kana", $family_name)
                ->where("given_name_kana", $given_name);
    $employee->update(["position" => $beacon->position]);
    //dd($employee);
    //$employee->position = $beacon->position;

    //return response()->json($employee, 200, [], JSON_UNESCAPED_UNICODE);
  }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Beacon;

class GetpositionController extends Controller
{

	public function all($position){
		//$employees = DB::table("employees")->join("divisions", "divisions.division_id", "=", "employees.division_id")
		//->join("departments", "departments.department_id", "=", "divisions.department_id");
		$employees  = DB::table("employees")->join("beacons", "beacons.beacon_id", "=", "employees.beacon_id");
		$employees = $employees->where("beacons.position", $position)->get();
		return response()->json($employees, 200);
	}

}

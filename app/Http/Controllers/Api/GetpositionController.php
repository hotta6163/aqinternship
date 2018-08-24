<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetpositionController extends Controller
{

	public function all($position){
		$employees = DB::table("employees")->join("divisions", "divisions.division_id", "=", "employees.division_id")
		->join("departments", "departments.department_id", "=", "divisions.department_id");
		$employees->join("beacons", "beacons.beacon_id", "=", "employees.beacon_id");
		$employees->where("position", $position);
   		return response()->json($employees, 200);
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendorController extends Controller
{

	public function all(){
		dd(1111);
		th = storage_path('app/json/google_api_secret_key.json');  
		putenv('GOOGLE_APPLICATION_CREDENTIALS='. $key_path);  
		$client = new \Google_Client();  
		$client->useApplicationDefaultCredentials();

		$client->addScope(\Google_Service_Calendar::CALENDAR);  
		$service = new \Google_Service_Calendar($client);  
		
		return response()->json($service) 
	}
}
 

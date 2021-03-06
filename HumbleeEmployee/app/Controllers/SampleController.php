<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Employee;

class SampleController extends BaseController{

	public function index()
	{
		global $executionStartTime; 
		$message = "Hello Suprb-Dev";
		
		return view('sample',compact('message'));
	}	

	public function auth_user()
	{
		global $executionStartTime; 
		
		$message = "Hello Auth User";
		return view('sample',compact('message'));
	}

	public function employees()
	{
		$data = (new Employee)->limit(100000)->get();
		$return = [
			'success' => true,
			'message' => "Data User Retrieved",
			'data' => $data,
		];
		response($return);
	}

}

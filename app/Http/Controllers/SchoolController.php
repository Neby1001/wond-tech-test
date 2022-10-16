<?php

namespace App\Http\Controllers;


use App\Services\WondeService;

class SchoolController extends Controller
{
	public function index(WondeService $wondeService)
	{
		return view('index');
	}

	public function staff(String $pageNumber, WondeService $wondeService)
	{
		$endpointVars = array('endpointName' => 'employees?page=' . $pageNumber);
		$staff = $wondeService->sendWondeAPIRequest($endpointVars);

		return view('staff', ['staff' => $staff->data, 'meta' => $staff->meta->pagination]);
	}

	public function classes(String $staffId, WondeService $wondeService)
	{
		$endpointVars = array('endpointName' => 'employees', 'searchId' => $staffId, 'extraField' => 'classes');
		$res = $wondeService->sendWondeAPIRequest($endpointVars);
		$classes = $res->data->classes->data;
		$classArray = [];

		foreach($classes as $k => $v)
		{
			$classArray[] = array('id' => $classes[$k]->id , 'name' => $classes[$k]->name);
		}

		return view('staff-classes', compact('classArray'));
	}

	public function students(String $classId, WondeService $wondeService)
	{
		$endpointVars = array('endpointName' => 'classes', 'searchId' => $classId, 'extraField' => 'students');
		$res = $wondeService->sendWondeAPIRequest($endpointVars);
		$students = $res->data->students->data;

		$studentArray = [];
		foreach($students as $k => $v)
		{
			$studentArray[] = array('studentName' => $students[$k]->forename . ' ' .  $students[$k]->surname);
		}
		return view('classes-students', compact('studentArray'));;
	}
}
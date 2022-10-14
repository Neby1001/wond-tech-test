<?php

namespace App\Http\Controllers;


use App\Services\WondeService;

class SchoolController extends Controller
{
	public function index(WondeService $wondeService)
	{
		$endpointVars = array('endpointName' => 'employees');
		$staff = $wondeService->sendWondeAPIRequest($endpointVars);
		//$meta =  $wondeService->getMeta();

		return view('index', ['staff' => $staff->data, 'meta' => $staff->meta->pagination]);
	}

	public function staff(String $pageNumber, WondeService $wondeService)
	{
		$endpointVars = array('endpointName' => 'employees?page=' . $pageNumber);
		$staff = $wondeService->sendWondeAPIRequest($endpointVars);

		return view('index', ['staff' => $staff->data, 'meta' => $staff->meta->pagination]);
		// $nextPage = (int)$pageNumber++;
		// echo $nextPage;
	}

	public function classes(String $staffId, WondeService $wondeService)
	{
		//$
		$testArr = [];
		// echo $staffId;

		$classes = $wondeService->getStaffClasses($staffId);
		$test = json_decode($classes, true);
		$classData = $this->mapClassData($test['data']['classes']['data']);
		return view('staff-classes', compact('classData'));;
	}

	public function students(String $classId, WondeService $wondeService)
	{
		// echo $classId;
		
		$endpointVars = array('endpointName' => 'classes', 'searchId' => $classId, 'extraField' => 'students');
		$res = $wondeService->sendWondeAPIRequest($endpointVars);
		$students = $res->data->students->data;
		//print_r($res->data->students->data);
		$studentArray = [];
		foreach($students as $k => $v)
		{
			$studentArray[] = array('studentName' => $students[$k]->forename . ' ' .  $students[$k]->surname);
		}
		return view('classes-students', compact('studentArray'));;
	}

	private function mapClassData($data)
	{
		$arr = [];
		foreach($data as $k => $v) {
			//print_r($v);
			$arr[]= array('id' => $data[$k]['id'], 'name' => $data[$k]['name']);
		}

		return $arr;

	}
}
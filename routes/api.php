<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getAllEmployees', function (Request $request) {
	$client = new \Wonde\Client('584f87f6bced06a25d6b1ec31959b05f74ec531e');

	$school = $client->school('A1930499544');

	foreach ($school->employees->all() as $employee) {
		echo $employee->forename . ' ' . $employee->surname . PHP_EOL;
	}
	echo 'Hi World';
	return $request;
});
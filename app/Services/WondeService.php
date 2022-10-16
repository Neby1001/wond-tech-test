<?php

namespace App\Services;
use GuzzleHttp\Client;


class WondeService {
	public $APIURL = 'https://api.wonde.com/v1.0/';
	public $schoolId = 'A1930499544';

	public function getAllStaff() {
		$client = new \Wonde\Client('584f87f6bced06a25d6b1ec31959b05f74ec531e');
		$school = $client->school($this->schoolId);

		return $school->employees->all();
	}

	public function getStaffClasses($staffId) {
		$endpoint = 'schools/' . $this->schoolId . '/employees/' . $staffId . '?include=classes';
		$guzzle = new Client(['base_uri' => $this->APIURL]);

		$raw_response = $guzzle->get($endpoint, ['headers' => [ 'Authorization' => 'Bearer ' . '584f87f6bced06a25d6b1ec31959b05f74ec531e' ]]);

		return $response = $raw_response->getBody()->getContents();
	}

	public function sendWondeAPIRequest($endpointVars)
	{
		// build up endpoint
		$extra = array_key_exists('extraField', $endpointVars) ? '?include=' . $endpointVars['extraField'] : null;
		$endpoint = 'schools/' . $this->schoolId . '/' . $endpointVars['endpointName'];
		$endpoint = array_key_exists('searchId', $endpointVars) ? $endpoint . '/' . $endpointVars['searchId'] . $extra : $endpoint;

		// guzzle
		$guzzle = new Client(['base_uri' => $this->APIURL]);

		$raw_response = $guzzle->get($endpoint, ['headers' => [ 'Authorization' => 'Bearer ' . '584f87f6bced06a25d6b1ec31959b05f74ec531e' ]]);
		return $response = json_decode($raw_response->getBody()->getContents());
	}
}
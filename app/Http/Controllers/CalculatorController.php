<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CalculatorController extends BaseController
{
	public function calculate(Request $request)
	{
		$input = $request->input;

		$result = intval($input);

		$response = [
		    'result' => $result
		];

		return response()->json($response);
	}
}
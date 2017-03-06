<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CalculatorController extends BaseController
{
	public function calculate(Request $request)
	{
		$str = $request->str;

		$result = intval($str);

		return response()->json([
		    'result' => $result
		]);
	}
}
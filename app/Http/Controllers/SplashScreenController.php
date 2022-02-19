<?php

namespace App\Http\Controllers;

use App\Models\ColorGrade;
use App\Models\ColorList;
use App\Models\ColorPattern;
use App\Models\Config;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

class SplashScreenController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = array();	

	   return view('splashScreen.index');
	}    
}

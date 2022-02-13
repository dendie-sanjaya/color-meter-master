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

class DashboardController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = array();	
	   $config = Config::where('is_delete','no')->get();

	   $dataColorGrade = ColorGrade::orderBy('name', 'asc')->where([['is_delete','no']])->get();
	   $dataColorPattern = ColorPattern::orderBy('name', 'asc')->where([['is_delete','no']])->get();

	   return view('dashboard.index',['data' => $data, 'dataColorGrade' => $dataColorGrade, 'dataColorPattern' => $dataColorPattern]);
	}    
}

<?php

namespace App\Http\Controllers;

//use App\Models\ColorGrade;
//use App\Models\ColorList;
// use App\Models\ColorPattern;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

class ConfigController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = Config::orderBy('name', 'asc')->first();
	   return view('config.edit',['data' => $data]);
	}    

	public function save(Request $request)
	{	
		$data['val'] =  $request->val;
	   	if($request->id == 0)
	   	{
	   		Config::create($data);
	   		Session::flash('msg-success','Create Success');
	   	}else{
	   		Config::where('id',$request->id)->update($data);
	   		Session::flash('msg-success','Update Success');
	   	}
       return redirect('config');
	}     
}

<?php

namespace App\Http\Controllers;

//use App\Models\ColorGrade;
//use App\Models\ColorList;
use App\Models\ColorPattern;
// use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

class ColorPatternController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = ColorPattern::orderBy('name', 'asc')->where([['is_delete','no']])->get();
	   return view('colorPattern.index',['data' => $data]);
	}    

	public function edit($id)
	{	
	   $data = ColorPattern::select('id','name','is_default','description')->where([['id',$id],['is_delete','no']])->first();
	   return view('colorPattern.edit',['data' => $data]);
	}    

	public function save(Request $request)
	{	
		$data['name'] =  $request->name;
		$data['is_default'] = $request->is_default;
	   	$data['description'] = $request->description;

	   	if($request->id == 0)
	   	{
	   		ColorPattern::create($data);
	   		Session::flash('msg-success','Create Success');
	   	}else{
		   	ColorPattern::where('id',$request->id)->update($data);
	   		Session::flash('msg-success','Update Success');
	   	}

	   	if($request->is_default == 'yes') {
	   		ColorPattern::query()->update(['is_default'=>'no']);
		   	ColorPattern::where('id',$request->id)->update(['is_default'=>'yes']);
	   }

       return redirect('colorPattern');
	}    

	public function delete($id)
	{  
	   if(!empty($id)) {
	       $data['is_delete'] =  'yes'; 
	       ColorPattern::where([['id',$id]])->update($data);
	       Session::put('msg-success','Delete Success');	   	
	   }		

       return redirect('colorPattern');
	}    
}

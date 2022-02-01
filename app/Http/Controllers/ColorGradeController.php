<?php

namespace App\Http\Controllers;

use App\Models\ColorGrade;
use App\Models\ColorList;
use App\Models\ColorPattern;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

class ColorGradeController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = ColorGrade::orderBy('name', 'asc')->where([['is_delete','no']])->get();	
	   return view('colorGrade.index',['data' => $data]);
	}    

	public function edit($id)
	{	
	   $data = ColorGrade::select('id','name','description')->where([['id',$id],['is_delete','no']])->first();	
	   return view('colorGrade.edit',['data' => $data]);
	}    

	public function save(Request $request)
	{	
	   $data['name'] =  $request->name;
	   $data['description'] = $request->description;
	   
       //ColorGrade::where([['code',$request->id]])->update($data);
       ColorGrade::create($data);
       Session::flash('msg-success','Delete sSuccess');
       return redirect('colorGrade');
	}    

	public function delete($id)
	{  
	   if(!empty($id)) {
	       $data['is_delete'] =  'yes'; 
	       ColorGrade::where([['id',$id]])->update($data);
	       Session::put('msg-success','Delete Success');	   	
	   }		

       return redirect('colorGrade');
	}    
}

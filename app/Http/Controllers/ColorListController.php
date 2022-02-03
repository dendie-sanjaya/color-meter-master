<?php

namespace App\Http\Controllers;

use App\Models\ColorGrade;
use App\Models\ColorList;
// use App\Models\ColorPattern;
// use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

class ColorListController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = ColorList::join('color_grade as b', 'color_list.color_grade_id', '=', 'b.id')->orderBy('b.id', 'asc')->get();	

	   return view('colorList.index',['data' => $data]);
	}    

	public function edit($id)
	{	
	   $data = ColorList::join('color_grade as b', 'color_list.color_grade_id', '=', 'b.id')->where([['color_list.id',$id],['color_list.is_delete','no']])->first();
	   $grade = ColorGrade::where([['is_delete','no']])->get();		
	   return view('colorList.edit',['data' => $data, 'grade' => $grade]);
	}    

	public function save(Request $request)
	{	
		$data['name'] =  $request->name;
	   	$data['description'] = $request->description;
	   	if($request->id == 0)
	   	{
	   		ColorList::create($data);
	   		Session::flash('msg-success','Create Success');
	   	}else{
	   		// $de['is_delete'] =  'yes';
	   		ColorList::where('id',$request->id)->update($data);
	   		Session::flash('msg-success','Update Success');
	   	}
       return redirect('colorGrade');
	}    

	public function delete($id)
	{  
	   if(!empty($id)) {
	       $data['is_delete'] =  'yes'; 
	       ColorList::where([['id',$id]])->update($data);
	       Session::put('msg-success','Delete Success');	   	
	   }		

       return redirect('colorGrade');
	}    
}

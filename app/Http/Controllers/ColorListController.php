<?php

namespace App\Http\Controllers;

use App\Models\ColorGrade;
use App\Models\ColorList;
use App\Models\ColorPattern;
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
	   $dataColorGrade = ColorGrade::orderBy('name', 'asc')->where([['is_delete','no']])->get();
	   $dataColorPattern = ColorPattern::orderBy('name', 'asc')->where([['is_delete','no']])->get();		
	   $data = ColorList::select('color_list.*')->where([['color_list.is_delete', 'no']])->orderBy('color_list.id', 'desc')->get();
	   
	   return view('colorList.index',['data' => $data, 'dataColorGrade' => $dataColorGrade, 'dataColorPattern' => $dataColorPattern]);
	}    

	public function edit($id)
	{	
	   $data = ColorList::join('color_grade as b', 'color_list.color_grade_id', '=', 'b.id')->join('color_pattern as c', 'color_list.color_pattern_id', '=', 'c.id')->where([['color_list.id',$id],['b.is_delete', 'no'], ['c.is_delete', 'no'],['color_list.is_delete', 'no']])->orderBy('b.id', 'asc')->first();
	   
	   $grade = ColorGrade::select('id','name')->where([['is_delete','no']])->orderBy('id', 'asc')->get();
	   $pattern = ColorPattern::select('id','name')->orderBy('name', 'asc')->where([['is_delete','no']])->get();		
	   
	   return view('colorList.edit',['data' => $data, 'grade' => $grade, 'pattern' =>$pattern]);
	}    

	public function save(Request $request)
	{	
		$data['title'] =  $request->title;
	   	$data['rgb'] = $request->rgb;
	   	$data['hexadecimal'] = $request->hexadecimal;
	   	$data['color_pattern_id'] = $request->color_pattern_id;
	   	$data['color_grade_id'] = $request->color_grade_id;

	   	if($request->id == 0)
	   	{
	   		ColorList::create($data);
	   		Session::flash('msg-success','Create Success');
	   	}else{
	   		// $de['is_delete'] =  'yes';
	   		ColorList::where('id',$request->id)->update($data);
	   		Session::flash('msg-success','Update Success');
	   	}
       return redirect('colorList');
	}    

	public function delete($id)
	{  
	   if(!empty($id)) {
	       $data['is_delete'] =  'yes'; 
	       ColorList::where([['id',$id]])->update($data);
	       Session::put('msg-success','Delete Success');	   	
	   }		

       return redirect('colorList');
	}    

	public function saveAjax(Request $request)
	{	
		$data['title'] =  $request->title;
	   	$data['rgb'] = $request->rgb;
	   	$data['hexadecimal'] = $request->hexadecimal;
	   	$data['color_pattern_id'] = $request->color_pattern_id;
	   	$data['color_grade_id'] = $request->color_grade_id;

	   	$where = [ 'hexadecimal' => $request->hexadecimal,
	   			   'color_pattern_id' => $request->color_pattern_id,
	   			   'color_grade_id' => $request->color_grade_id,
	   			 ];  

	   	if(empty(ColorList::where($where)->first())) {
	   		ColorList::create($data);	   		
			return response()->json(['success'=>'Save-ColorSuccess','code'=>'200']);	   	
	   	} else {
			return response()->json(['success'=>'Color-Alredy','code'=>'201']);	  
	   	}	   	
	}   	
}

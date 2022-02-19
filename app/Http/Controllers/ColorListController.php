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

	public function index(Request $request)
	{		

	   $dataColorGrade = ColorGrade::orderBy('name', 'asc')->where([['is_delete','no']])->get();
	   $dataColorPattern = ColorPattern::orderBy('name', 'asc')->where([['is_delete','no']])->get();

	   $color_grade_id =  !empty($request->color_grade_id) ? $request->color_grade_id : $dataColorGrade[0]->id;	
	   $color_patern_id =  !empty($request->color_patern_id) ? $request->color_patern_id : $dataColorPattern[0]->id;

	   $data = ColorList::select('color_list.*', 'b.name as name_grade', 'c.name as name_pattern')->join('color_grade as b', 'color_list.color_grade_id', '=', 'b.id')->join('color_pattern as c', 'color_list.color_pattern_id', '=', 'c.id')->where([['color_list.is_delete', 'no'],['b.is_delete', 'no'], ['c.is_delete', 'no'], ['color_list.color_pattern_id',$color_patern_id], ['color_list.color_grade_id', $color_grade_id] ])->orderBy('color_list.id', 'desc')->get();

	   return view('colorList.index',['data' => $data, 'dataColorGrade' => $dataColorGrade, 'dataColorPattern' => $dataColorPattern,'color_grade_id' => $color_grade_id, 'color_patern_id' => $color_patern_id]);
	}    

	public function edit($id)
	{	
	   $data = ColorList::where('id',$id)->first();
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
	   		ColorList::where('id',$request->id)->update($data);
	   		Session::flash('msg-success','Update Success');
	   	}
       return redirect('colorList?color_grade_id='.$request->color_grade_id.'&color_patern_id='.$request->color_pattern_id);
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

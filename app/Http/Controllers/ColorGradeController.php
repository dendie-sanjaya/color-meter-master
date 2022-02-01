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

class ColorGradeController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = ColorGrade::orderBy('name', 'asc')->get();	
	   return view('colorGrade.index',['data' => $data]);
	}    

	public function edit($id)
	{		
	   $data = ColorGrade::select('id','name','description')->where([['id',$id],['is_delete',0]])->first();	
	   return view('colorGrade.edit',['data' => $data]);
	}    

	public function save(Request $request)
	{	
	   $data['name'] =  $request->name;
	   $data['description'] = $request->description;
	   
       //ColorGrade::where([['code',$request->id]])->update($data);

       ColorGrade::create($data);
   	   $msg = 'Add Data Success';

	   return redirect('colorGrade.index')->with('msg',$msg_success);
	}    

	public function delete($id)
	{		
	   //$data = Toko::select('code','name','description')->where('code',$id)->first();	
	   //return response()->json($data);
	}    
}

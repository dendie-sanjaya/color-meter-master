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

class ColorListController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{		
	   $data = ColorList::orderBy('code', 'asc')->get();	
	   return view('colorList.index',['data' => $data]);
	}    

	public function edit($id)
	{		
	   //$data = Toko::select('code','name','description')->where('code',$id)->first();	
	   //return response()->json($data);
	}    

	public function save(Request $request)
	{	
	   /*			
	   $data['name'] = $request->name;
	   $data['description'] = $request->description;
       Toko::where([['code',$request->id]])->update($data);
   	   $msg_success = 'Ubah Data Berhasil';

	   return redirect('store')->with('msg_success',$msg_success);
	   */
	}    
}

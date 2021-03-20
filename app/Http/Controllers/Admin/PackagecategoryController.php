<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Packagecategory;

class PackagecategoryController extends Controller
{
    public function create(){
    	return view('backEnd.packagecategory.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'name'=>'required',
    		'status'=>'required',
    	]);

    	$store_data           	  = 	new Packagecategory();
        $store_data->name         =     $request->name;
    	$store_data->slug      	  = 	preg_replace('/\s+/u', '-', trim($request->name));
    	$store_data->status  	  = 	$request->status;
    	$store_data->save();
    	Toastr::success('message', 'Packagecategory category add successfully!');
    	return redirect('admin/packagecategory/manage');
    }
    public function manage(){
    	$show_data = Packagecategory::orderBy('id','DESC')->get();
    	return view('backEnd.packagecategory.manage',compact('show_data'));
    }
    public function edit($id){
        $edit_data =   Packagecategory::find($id);
        return view('backEnd.packagecategory.edit',compact('edit_data'));
    }

    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'status'=>'required',
        ]);

    	$update_data = Packagecategory::find($request->hidden_id);
		$update_data->name     		 = 	$request->name;
        $update_data->slug           =  preg_replace('/\s+/u', '-', trim($request->name));
    	$update_data->status  	  	 = 	$request->status;
    	$update_data->save();
        Toastr::success('message', 'Packagecategory category Update successfully!');
        return redirect('admin/packagecategory/manage');
    }
    public function inactive(Request $request){
        $inactive_data           =   Packagecategory::find($request->hidden_id);
        $inactive_data->status   =   0;
        $inactive_data->save();
        Toastr::success('message', 'Packagecategory category inactive successfully!');
        return redirect('admin/packagecategory/manage');   
    }
    public function active(Request $request){
        $active_data         =   Packagecategory::find($request->hidden_id);
        $active_data->status =   1;
        $active_data->save();
        Toastr::success('message', 'Packagecategory category active successfully!');
        return redirect('admin/packagecategory/manage');   
    } 
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Contactinfo;
use File;

class ContactinfoController extends Controller
{
    public function create(){
    	return view('backEnd.contactinfo.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'phone'=>'required',
            'address'=>'required',
            'time'=>'required',
            'email'=>'required',
    		'status'=>'required',
    	]);

    	
    	$store_data = new Contactinfo();
    	$store_data->phone              = $request->phone;
    	$store_data->address            = $request->address;
    	$store_data->time               = $request->time;
    	$store_data->email              = $request->email;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Contactinfo add successfully!');
    	return redirect('admin/contactinfo/manage');
    }

    public function manage(){
        $show_data = Contactinfo::orderBy('id','DESC')->get();
        return view('backEnd.contactinfo.manage',compact('show_data'));
    }

    public function edit($id){
        $edit_data = Contactinfo::find($id);
        return view('backEnd.contactinfo.edit',compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = Contactinfo::find($request->hidden_id);
        $update_data->phone = $request->phone;
        $update_data->address = $request->address;
        $update_data->time = $request->time;
        $update_data->email = $request->email;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Contactinfo  update successfully!');
        return redirect('admin/contactinfo/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Contactinfo::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Contactinfo  uppublished successfully!');
        return redirect('admin/contactinfo/manage');
    }

    public function active(Request $request){
        $publishId = Contactinfo::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Contactinfo  uppublished successfully!');
        return redirect('admin/contactinfo/manage');
    }
     public function destroy(Request $request){
        $delete_data = Contactinfo::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/banquetvideo', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Contactinfo delete successfully!');
        return redirect('admin/contactinfo/manage');
    }
}

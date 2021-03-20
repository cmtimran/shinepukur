<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Clientlogo;
use File;

class ClientlogoController extends Controller
{
    public function create(){
    	return view('backEnd.clientlogo.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/clientlogo/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Clientlogo();
    	$store_data->image     = $fileUrl;
    	$store_data->status    = $request->status;
    	$store_data->save();
        Toastr::success('message', 'Client Logo add successfully!');
    	return redirect('/admin/clientlogo/manage');
    }
    public function manage(){
    	$show_data = Clientlogo::orderBy('id','DESC')->get();
        return view('backEnd.clientlogo.manage',compact('show_data'));
    }
    public function edit($id){
        $edit_data = Clientlogo::find($id);
        return view('backEnd.clientlogo.edit', ['edit_data'=>$edit_data]);
    }

     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = Clientlogo::find($request->hidden_id);
        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $uploadPath = 'public/uploads/clientlogo/';
            File::delete(public_path() . 'public/uploads/clientlogo', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Client Logo  update successfully!');
        return redirect('/admin/clientlogo/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Clientlogo::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Client Logo  uppublished successfully!');
        return redirect('/admin/clientlogo/manage');
    }

    public function active(Request $request){
        $publishId = Clientlogo::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Client Logo  uppublished successfully!');
        return redirect('/admin/clientlogo/manage');
    }
     public function destroy(Request $request){
        $delete_data = Clientlogo::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/clientlogo', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Client Logo delete successfully!');
        return redirect('/admin/clientlogo/manage');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Roomservice;
use App\Package;
use DB;
use File;
class RoomserviceController extends Controller
{
     public function create(){
        $packages = Package::where('status',1)->get();
    	return view('backEnd.roomservice.create',compact('packages'));
    }
    public function store(Request $request){
    	$this->validate($request,[
            'package_id'=>'required',
            'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/roomservice/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Roomservice();
    	$store_data->title             = $request->title;
    	$store_data->package_id        = $request->package_id;
        $store_data->image             = $fileUrl;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Room serviceadd successfully!');
    	return redirect('admin/roomservice/manage');
    }

    public function manage(){
         $show_data = DB::table('roomservices')
        ->join('packages','roomservices.package_id','=','packages.id')
        ->select('packages.title as packagetitle','roomservices.*')
        ->orderBy('roomservices.id','DESC')
        ->get();
        
        return view('backEnd.roomservice.manage',compact('show_data'));
    }

    public function edit($id){
        $edit_data = Roomservice::find($id);
        $packages = Package::where('status',1)->get();
        return view('backEnd.roomservice.edit',compact('edit_data','packages'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'package_id'=>'required',
            'status'=>'required',
        ]);

        $update_data = Roomservice::find($request->hidden_id);


        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/roomservice/';
            File::delete(public_path() . 'public/uploads/slider', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->title = $request->title;
        $update_data->package_id = $request->package_id;
        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Room service update successfully!');
        return redirect('admin/roomservice/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Roomservice::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Room service uppublished successfully!');
        return redirect('admin/roomservice/manage');
    }

    public function active(Request $request){
        $publishId = Roomservice::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Room service uppublished successfully!');
        return redirect('admin/roomservice/manage');
    }
     public function destroy(Request $request){
        $delete_data = Roomservice::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/slider', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Room servicedelete successfully!');
        return redirect('admin/roomservice/manage');
    }
}

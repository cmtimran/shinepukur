<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Banquetphoto;
use File;

class BanquetphotosController extends Controller
{
     public function create(){
    	return view('backEnd.banquetphotos.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/banquetphotos/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Banquetphoto();
        $store_data->image              = $fileUrl;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Banquet photos add successfully!');
    	return redirect('admin/banquetphotos/manage');
    }

    public function manage(){
        $show_data = Banquetphoto::orderBy('id','DESC')->get();
        return view('backEnd.banquetphotos.manage',compact('show_data'));
    }

    public function edit($id){
        $edit_data = Banquetphoto::find($id);
        return view('backEnd.banquetphotos.edit',compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = Banquetphoto::find($request->hidden_id);


        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/banquetphotos/';
            File::delete(public_path() . 'public/uploads/banquetphotos', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Banquet photos  update successfully!');
        return redirect('admin/banquetphotos/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Banquetphoto::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Banquet photos  uppublished successfully!');
        return redirect('admin/banquetphotos/manage');
    }

    public function active(Request $request){
        $publishId = Banquetphoto::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Banquet photos  uppublished successfully!');
        return redirect('admin/banquetphotos/manage');
    }
     public function destroy(Request $request){
        $delete_data = Banquetphoto::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/banquetphotos', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Banquet photos delete successfully!');
        return redirect('admin/banquetphotos/manage');
    }
}

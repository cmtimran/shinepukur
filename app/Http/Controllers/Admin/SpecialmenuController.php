<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Specialmenu;
use File;

class SpecialmenuController extends Controller
{
    public function create(){
    	return view('backEnd.specialmenu.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/specialmenu/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Specialmenu();
        $store_data->image              = $fileUrl;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Specialmenu add successfully!');
    	return redirect('admin/specialmenu/manage');
    }

    public function manage(){
        $show_data = Specialmenu::orderBy('id','DESC')->get();
        return view('backEnd.specialmenu.manage',compact('show_data'));
    }

    public function edit($id){
        $edit_data = Specialmenu::find($id);
        return view('backEnd.specialmenu.edit',compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = Specialmenu::find($request->hidden_id);


        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/specialmenu/';
            File::delete(public_path() . 'public/uploads/specialmenu', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Specialmenu  update successfully!');
        return redirect('admin/specialmenu/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Specialmenu::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Specialmenu  uppublished successfully!');
        return redirect('admin/specialmenu/manage');
    }

    public function active(Request $request){
        $publishId = Specialmenu::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Specialmenu  uppublished successfully!');
        return redirect('admin/specialmenu/manage');
    }
     public function destroy(Request $request){
        $delete_data = Specialmenu::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/specialmenu', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Specialmenu delete successfully!');
        return redirect('admin/specialmenu/manage');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Slider;
use File;

class SliderController extends Controller
{
   public function create(){
    	return view('backEnd.slider.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/slider/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Slider();
        $store_data->image              = $fileUrl;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Slider add successfully!');
    	return redirect('admin/slider/manage');
    }

    public function manage(){
        $show_data = Slider::orderBy('id','DESC')->get();
        return view('backEnd.slider.manage',compact('show_data'));
    }

    public function edit($id){
        $edit_data = Slider::find($id);
        return view('backEnd.slider.edit',compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = Slider::find($request->hidden_id);
        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/slider/';
            File::delete(public_path() . 'public/uploads/slider', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Slider  update successfully!');
        return redirect('admin/slider/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Slider::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Slider  uppublished successfully!');
        return redirect('admin/slider/manage');
    }

    public function active(Request $request){
        $publishId = Slider::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Slider  uppublished successfully!');
        return redirect('admin/slider/manage');
    }
     public function destroy(Request $request){
        $delete_data = Slider::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/slider', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Slider delete successfully!');
        return redirect('admin/slider/manage');
    }
}

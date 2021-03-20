<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Testimonial;
use File;
use DB;

class TestimonialController extends Controller
{
    public function create(){
    	return view('backEnd.testimonial.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'description'=>'required',
    		'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/testimonial/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Testimonial();
    	$store_data->name 			= $request->name;
    	$store_data->description 	= $request->description;
        $store_data->city           = $request->city;
    	$store_data->image 			= $fileUrl;
    	$store_data->status 		= $request->status;
    	$store_data->save();
        Toastr::success('message', 'Testimonial add successfully!');
    	return redirect('/admin/testimonial/manage');
    }
    public function manage(){
    	$show_data = Testimonial::orderBy('id','DESC')->get();
        return view('backEnd.testimonial.manage',compact('show_data'));
    }
    public function edit($id){
    	$edit_data = Testimonial::find($id);
        return view('backEnd.testimonial.edit', compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
    		'name'=>'required',
    		'description'=>'required',
    		'status'=>'required',
        ]);

        $update_data = Testimonial::find($request->hidden_id);

        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/testimonial/';
            File::delete(public_path() . 'public/uploads/testimonial', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

       $update_data->name 			=	$request->name;
    	$update_data->description 	=	$request->description;
        $update_data->city          =   $request->city;
    	$update_data->image 		= 	$fileUrl;
    	$update_data->status 		= 	$request->status;
        $update_data->save();
        Toastr::success('message', 'Testimonial  update successfully!');
        return redirect('/admin/testimonial/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Testimonial::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Testimonial  uppublished successfully!');
        return redirect('/admin/testimonial/manage');
    }

    public function active(Request $request){
        $publishId = Testimonial::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Testimonial  uppublished successfully!');
        return redirect('/admin/testimonial/manage');
    }
     public function destroy(Request $request){
        $delete_data = Testimonial::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/testimonial', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Testimonial delete successfully!');
        return redirect('/admin/testimonial/manage');
    }
}

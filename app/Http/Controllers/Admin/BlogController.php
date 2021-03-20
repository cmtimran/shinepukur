<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Blog;
use File;
use DB;

class BlogController extends Controller
{
    public function create(){
    	return view('backEnd.blog.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
    		'status'=>'required',
    	]);


    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/blog/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new Blog();
        $store_data->title 				= $request->title;
        $store_data->slug      	  		= 	preg_replace('/\s+/u', '-', trim($request->title));
        $store_data->description        = $request->description;
        $store_data->image              = $fileUrl;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Blog add successfully!');
    	return redirect('admin/blog/manage');
    }

    public function manage(){
        $show_data = Blog::orderBy('id','DESC')->get();
        return view('backEnd.blog.manage',compact('show_data'));
    }
    public function edit($id){
        $edit_data = Blog::find($id);
        return view('backEnd.blog.edit',compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
        ]);

        $update_data = Blog::find($request->hidden_id);


        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/blog/';
            File::delete(public_path() . 'public/uploads/blog', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->title = $request->title;
        $update_data->slug           =  preg_replace('/\s+/u', '-', trim($request->title));
        $update_data->description = $request->description;
        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Blog  update successfully!');
        return redirect('admin/blog/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Blog::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Blog  uppublished successfully!');
        return redirect('admin/blog/manage');
    }

    public function active(Request $request){
        $publishId = Blog::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Blog  uppublished successfully!');
        return redirect('admin/blog/manage');
    }
     public function destroy(Request $request){
        $delete_data = Blog::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/blog', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Blog delete successfully!');
        return redirect('admin/blog/manage');
    }
}

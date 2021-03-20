<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\ServicePost;
use App\ServiceCategory;
use File;
use DB;
class ServicePostController extends Controller
{
     public function create(){
        $servicecategories = Servicecategory::where('status',1)->get();
    	return view('backEnd.service.post.create',compact('servicecategories'));
    }
    public function store(Request $request){
    	$this->validate($request,[
            'servicecategory_id'=>'required',
            'title'=>'required',
            'overview'=>'required',
    		'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = time().$file->getClientOriginalName();
    	$uploadPath = 'public/uploads/servicepost/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new ServicePost();
        $store_data->servicecategory_id = $request->servicecategory_id;
        $store_data->title = $request->title;
        $store_data->overview           = $request->overview;
        $store_data->image              = $fileUrl;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Service post add successfully!');
    	return redirect('/editor/service/manage');
    }

    public function manage(){

        $show_data = DB::table('service_posts')
            ->join('service_categories','service_posts.servicecategory_id','=','service_categories.id')
            ->select('service_posts.*','service_categories.name')
            ->orderBy('id','DESC')
            ->get();

        return view('backEnd.service.post.manage',compact('show_data'));
    }
    public function edit($id){
        $servicecategories = Servicecategory::where('status',1)->get();
        $edit_data = ServicePost::find($id);
        return view('backEnd.service.post.edit',compact('servicecategories','edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'servicecategory_id'=>'required',
            'title'=>'required',
            'overview'=>'required',
            'status'=>'required',
        ]);

        $update_data = ServicePost::find($request->hidden_id);
        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $uploadPath = 'public/uploads/servicepost/';
            File::delete(public_path() . 'public/uploads/servicepost', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

        $update_data->servicecategory_id = $request->servicecategory_id;
        $update_data->title = $request->title;
        $update_data->overview = $request->overview;
        $update_data->image = $fileUrl;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Service post  update successfully!');
        return redirect('/editor/service/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = ServicePost::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Service post  uppublished successfully!');
        return redirect('/editor/service/manage');
    }

    public function active(Request $request){
        $publishId = ServicePost::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Service post  uppublished successfully!');
        return redirect('/editor/service/manage');
    }
     public function destroy(Request $request){
        $delete_data = ServicePost::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/servicepost', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Service post delete successfully!');
        return redirect('/editor/service/manage');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Banquetvideo;
use File;

class BanquetvideoController extends Controller
{
     public function create(){
    	return view('backEnd.banquetvideo.create');
    }
    public function store(Request $request){
    	$this->validate($request,[
            'video'=>'required',
    		'status'=>'required',
    	]);

    	
    	$store_data = new Banquetvideo();
    	$store_data->video              = $request->video;
    	$store_data->status             = $request->status;
        
    	$store_data->save();
        Toastr::success('message', 'Banquetvideo add successfully!');
    	return redirect('admin/banquetvideo/manage');
    }

    public function manage(){
        $show_data = Banquetvideo::orderBy('id','DESC')->get();
        return view('backEnd.banquetvideo.manage',compact('show_data'));
    }

    public function edit($id){
        $edit_data = Banquetvideo::find($id);
        return view('backEnd.banquetvideo.edit',compact('edit_data'));
    }
     public function update(Request $request){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $update_data = Banquetvideo::find($request->hidden_id);
        $update_data->video = $request->video;
        $update_data->status = $request->status;
        $update_data->save();
        Toastr::success('message', 'Banquetvideo  update successfully!');
        return redirect('admin/banquetvideo/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = Banquetvideo::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'Banquetvideo  uppublished successfully!');
        return redirect('admin/banquetvideo/manage');
    }

    public function active(Request $request){
        $publishId = Banquetvideo::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'Banquetvideo  uppublished successfully!');
        return redirect('admin/banquetvideo/manage');
    }
     public function destroy(Request $request){
        $delete_data = Banquetvideo::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/banquetvideo', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'Banquetvideo delete successfully!');
        return redirect('admin/banquetvideo/manage');
    }
}

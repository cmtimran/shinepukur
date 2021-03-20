<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\User;
use App\Role;
use File;
use DB;

class UserController extends Controller
{
     public function create(){
     	$user_role = Role::all();
    	return view('backEnd.user.create',compact('user_role'));
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'role_id'=>'required',
    		'name'=>'required',
    		'username'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    		'designation'=>'required',
    		'password'=>'required',
    		'image'=>'required',
    		'status'=>'required',
    	]);

    	// image upload
    	$file = $request->file('image');
    	$name = $file->getClientOriginalName();
    	$uploadPath = 'public/uploads/user/';
    	$file->move($uploadPath,$name);
    	$fileUrl =$uploadPath.$name;

    	$store_data = new User();
    	$store_data->role_id 		= $request->role_id;
    	$store_data->name 			= $request->name;
    	$store_data->username 		= $request->username;
    	$store_data->email 			= $request->email;
    	$store_data->phone 			= $request->phone;
    	$store_data->designation 	= $request->designation;
    	$store_data->password 		= bcrypt(request('password'));
    	$store_data->image 			= $fileUrl;
    	$store_data->status 		= $request->status;
    	$store_data->save();
        Toastr::success('message', 'User add successfully!');
    	return redirect('/superadmin/user/manage');
    }
    public function manage(){
    	$show_data = DB::table('users')
    	->join('roles', 'users.role_id', '=', 'roles.id' )
    	->select('users.*', 'roles.user_role')
        ->orderBy('id','DESC')
    	->get();
        return view('backEnd.user.manage',compact('show_data'));
    }
    public function edit($id){
    	$edit_data = User::find($id);
        $user_role = Role::all();
        return view('backEnd.user.edit', compact('edit_data','user_role'));
    }
     public function update(Request $request){
        $this->validate($request,[
    		'role_id'=>'required',
            'name'=>'required',
    		'username'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    		'designation'=>'required',
    		'status'=>'required',
        ]);

        $update_data = User::find($request->hidden_id);

        $update_image = $request->file('image');
        if ($update_image) {
           $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $uploadPath = 'public/uploads/user/';
            File::delete(public_path() . 'public/uploads/user', $update_data->image);
            $file->move($uploadPath,$name);
            $fileUrl =$uploadPath.$name;
        }else{
            $fileUrl = $update_data->image;
        }

    	$update_data->role_id 		= 	$request->role_id;
       $update_data->name 			=	$request->name;
    	$update_data->username 		=	$request->username;
    	$update_data->email  		= 	$request->email;
    	$update_data->phone  		= 	$request->phone;
    	$update_data->designation 	= 	$request->designation;
    	$update_data->image 		= 	$fileUrl;
    	$update_data->status 		= 	$request->status;
        $update_data->save();
        Toastr::success('message', 'User  update successfully!');
        return redirect('/superadmin/user/manage');
    }

    public function inactive(Request $request){
        $unpublish_data = User::find($request->hidden_id);
        $unpublish_data->status=0;
        $unpublish_data->save();
        Toastr::success('message', 'User  uppublished successfully!');
        return redirect('/superadmin/user/manage');
    }

    public function active(Request $request){
        $publishId = User::find($request->hidden_id);
        $publishId->status=1;
        $publishId->save();
        Toastr::success('message', 'User  uppublished successfully!');
        return redirect('/superadmin/user/manage');
    }
     public function destroy(Request $request){
        $delete_data = User::find($request->hidden_id);
        File::delete(public_path() . 'public/uploads/user', $delete_data->image);  
        $delete_data->delete();
        Toastr::success('message', 'User delete successfully!');
        return redirect('/superadmin/user/manage');
    }
}

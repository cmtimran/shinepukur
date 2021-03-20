<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Package;
use App\Productimage;
use DB;

class PackageController extends Controller
{
   public function create(){
    	return view('backEnd.package.create');
    }
     public function store(Request $request){
        $this->validate($request,[
    		'image'					=>	'required',
    		'status'				=>	'required',

    	]);
       
    	$store_data           	 		  = 	new Package();
    	$store_data->title                = 	$request->title;
        $store_data->slug                 =     preg_replace('/\s+/u', '-', trim($request->title));
    	$store_data->size   		      = 	$request->size;
        $store_data->capacity             =     $request->capacity;
        $store_data->bed                  =     $request->bed;
        $store_data->packageservice       =     $request->packageservice;
        $store_data->oldprice             =     $request->oldprice;
        $store_data->newprice             =     $request->newprice;
        $store_data->perday               =     $request->perday;
    	$store_data->description   		  = 	$request->description;
        $store_data->offer                =     $request->offer;
    	$store_data->status    		      = 	$request->status;
    	$store_data->save();

        $productId=$store_data->id;
        $images = $request->file('image');
        foreach($images as $image)
        {
           // image01 upload
            $name =  time().'-'.$image->getClientOriginalName();
            $uploadpath = 'public/uploads/product/';
            $image->move($uploadpath, $name);
            $imageUrl = $uploadpath.$name;  

             $proimage= new Productimage();
             $proimage->product_id = $productId;
             $proimage->image=$imageUrl;
             $proimage->save(); 
        }

    	Toastr::success('message', 'Package information upload successfully!');
    	return redirect('/admin/package/manage');
        }



     public function manage(){
     	$show_data = Package::orderBy('id','DESC')->get();

        $productimage = DB::table('productimages')
        ->join('packages','productimages.product_id','=','packages.id')
        ->select('packages.title','productimages.*')
        ->orderBy('productimages.id','DESC')
        ->get();

     	return view('backEnd.package.manage',compact('show_data','productimage'));
     }

     public function edit($id){
     	$edit_data = Package::find($id);

        $productimage = DB::table('productimages')
        ->join('packages','productimages.product_id','=','packages.id')
        ->select('packages.title','productimages.*')
        ->orderBy('productimages.id','DESC')
        ->get();
        return view('backEnd.package.edit',compact('edit_data','productimage'));
     }

     public function update(Request $request){
            $this->validate($request,[
	    		'status'				=>	'required',

            ]);
     	$update_data = Package::find($request->hidden_id);

    	$update_data->title                =     $request->title;
       $update_data->slug                  =  preg_replace('/\s+/u', '-', trim($request->title));
        $update_data->size                 =     $request->size;
        $update_data->bed                  =     $request->bed;
        $update_data->packageservice       =     $request->packageservice;
        $update_data->oldprice             =     $request->oldprice;
        $update_data->newprice             =     $request->newprice;
        $update_data->perday             =     $request->perday;
        $update_data->description     	   =     $request->description;
        $update_data->offer                =     $request->offer;
        $update_data->status               =     $request->status;
    	$update_data->save();

        $productId=$update_data->id;
        $update_images=Productimage::where('product_id',$productId)->get();
        $images = $request->file('image');
        if($images){
            foreach($images as $image)
                {
                   // image01 upload
                $name =  time().'-'.$image->getClientOriginalName();
                $uploadpath = 'public/uploads/product/';
                $image->move($uploadpath, $name);
                $imageUrl = $uploadpath.$name;  

                 $proimage= new Productimage();
                 $proimage->product_id = $productId;
                 $proimage->image=$imageUrl;
                 $proimage->save(); 
                }
        }else{
            foreach($update_images as $update_image){
            $uimage=$update_image->image;
            $update_image->image    =   $uimage;
            $update_image->save();
            }
        }

    	Toastr::success('message', 'Package information update successfully!');
    	return redirect('/admin/package/manage');
     }
      public function inactive(Request $request){
		$Unpublished_data			=	Package::find($request->hidden_id);
		$Unpublished_data->status 	=	0;
		$Unpublished_data->save();
		Toastr::success('message', 'Product unpublished successfully!');
		return redirect('admin/package/manage');	
	}
	public function active(Request $request){
		$published_data			=	Package::find($request->hidden_id);
		$published_data->status 	=	1;
		$published_data->save();
		Toastr::success('message', 'Product published successfully!');
		return redirect('admin/package/manage');	
	}
     public function packagelistdel($id){
        $delete_list = Packagelist::find($id);
        $delete_list->delete();
        Toastr::success('message', 'Package list delete successfully!');
        return redirect()->back();
    }
     public function packageimgdel($id){
        $delete_img = Productimage::find($id);
        $delete_img->delete();
        Toastr::success('message', ' image  delete successfully!');
        return redirect()->back();
    }
	public function destroy(Request $request){
		$delete_data = Package::find($request->hidden_id);
		$delete_data->delete();
		Toastr::success('message', 'Package delete successfully!');
		return redirect('admin/package/manage');	
	}
}

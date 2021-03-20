<?php

namespace App\Http\Controllers\FrontEnd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\About;
use App\Slider;
use App\Gallery;
use App\Specialmenu;
use App\Testimonial;
use App\Blog;
use App\Packagecategory;
use App\Package;
use App\Banquetphoto;
use App\Banquetvideo;
use App\Contactinfo;
use App\Productimage;
use App\Roomservice;
use DB;
class FrontEndController extends Controller
{

    public function index(){
        $sliders   = Slider::where('status',1)
        ->orderBy('id','ASC')
        ->get();
        // Sliders
        $packages = Package::where(['status'=>1,'offer'=>NULL])->orderBy('id','DESC')->get();
        $specialpackages = Package::where(['status'=>1,'offer'=>1])->orderBy('id','DESC')->get();
        $testimonials = Testimonial::where('status',1)->orderBy('id','DESC')->get();
        $allblogs = Blog::where('status',1)->orderBy('id','DESC')->limit(3)->get();
    	return view('frontEnd.index',compact('sliders','packages','testimonials','allblogs','specialpackages'));
    }

    public function about(){
    	return view('frontEnd.layouts.pages.about');
    }


    public function rooms(){
        $packages = Package::where(['status'=>1,'offer'=>NULL])->orderBy('id','ASC')->get();
        return view('frontEnd.layouts.pages.rooms',compact('packages'));
    }

    public function roomdetails($slug, $id){
        $packagedetails = Package::where(['status'=>1, 'id'=>$id])->first();
        $allpackage = Package::where(['status'=>1,'offer'=>NULL])->orderBy('id','DESC')->get();
        $roomservice = DB::table('roomservices')
        ->join('packages','roomservices.package_id','=','packages.id')
        ->select('roomservices.*','packages.id')
        ->where('roomservices.package_id',$id)
        ->orderBy('roomservices.id','DESC')
        ->get();
        return view('frontEnd.layouts.pages.roomdetails',compact('packagedetails','allpackage','roomservice'));
    }

    public function resturant(){
        $specialmenus = Specialmenu::where('status',1)->orderBy('id','DESC')->get();
        return view('frontEnd.layouts.pages.resturant',compact('specialmenus'));
    }
    public function banquethall(){
        $banquetphotos = Banquetphoto::where('status',1)->orderBy('id','DESC')->get();
        $banquetvideos = Banquetvideo::where('status',1)->orderBy('id','DESC')->get();
        return view('frontEnd.layouts.pages.banquethall',compact('banquetphotos','banquetvideos'));
    }
    public function gallery(){
        $galleries = Gallery::where('status',1)->orderBy('id','DESC')->get();
        return view('frontEnd.layouts.pages.gallery',compact('galleries'));
    }
    public function offer(){
        $specialpackages = Package::where(['status'=>1,'offer'=>1])->orderBy('id','DESC')->get();
        return view('frontEnd.layouts.pages.offer',compact('specialpackages'));
    }
    public function booknow(){
        $packages = Package::where(['status'=>1, 'offer'=>NULL])->orderBy('id','DESC')->get();
        return view('frontEnd.layouts.pages.booknow',compact('packages'));
    }

     public function blog(){
        $specialpackages = Package::where(['status'=>1,'offer'=>1])->orderBy('id','DESC')->get();
        $allblogs = Blog::where('status',1)->orderBy('id','DESC')->get();
        return view('frontEnd.layouts.pages.blog',compact('allblogs','specialpackages'));
    }

    public function blogdetails($id,$slug){
         $show_data = Blog::where(['status'=>1,'id'=>$id])->first();
         $specialpackages = Package::where(['status'=>1,'offer'=>1])->orderBy('id','DESC')->get();
         return view('frontEnd.layouts.pages.blogdetails',compact('show_data','specialpackages'));
    }

    public function contact(){
        $contactinfos = Contactinfo::where('status',1)->limit(1)->get();
        return view('frontEnd.layouts.pages.contact',compact('contactinfos'));
    }

    


   
   
     
}

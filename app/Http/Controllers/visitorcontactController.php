<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Post;
use App\Package;
use Mail;

class visitorcontactController extends Controller
{
    public function visitorcontact(Request $request){
      $this->validate($request, [
         'name'=>'required',
         'contact_subject'=>'required',
         'contact_email'=>'required',
         'contact_text'=>'required',
        ]);
      $data = array(
         'name' => $request->name,
         'contact_email' => $request->contact_email,
         'contact_phone' => $request->contact_phone,
         'contact_subject' => $request->contact_subject,
         'contact_text' => $request->contact_text,
        );
        // return $data;
        $send = Mail::send('frontEnd.emails.contact', $data, function($textmsg) use ($data){
         $textmsg->from($data['contact_email']);
         $textmsg->to('polashpk566@gmail.com');
         $textmsg->subject($data['contact_text']);
        });


        if($send){
          Toastr::success('message', 'Information successfully!');
          return redirect()->back();
        }else{
          Toastr::success('message', 'Information successfully!');
          return redirect()->back();
        }
    }
    // Subscribe 
    public function visitorsubscribe(Request $request){
      $this->validate($request, [
         'subscribe_email'=>'required',
        ]);
      $data = array(
         'subscribe_email' => $request->subscribe_email,
        );
        // return $data;
        $send = Mail::send('frontEnd.emails.email', $data, function($textmsg) use ($data){
         $textmsg->from($data['subscribe_email']);
         $textmsg->to('polashpk566@gmail.com');
         $textmsg->subject($data['subscribe_email']);
        });


        if($send){
          Toastr::success('message', 'Subscribe successfully!');
          return redirect()->back();
        }else{
          Toastr::success('message', 'Subscribe successfully!');
          return redirect()->back();
        }
    }

    // Visitor Booking Now

    public function visitorhomebooking(Request $request){
      $this->validate($request, [
         'visitor_email'=>'required',
        ]);
      $data = array(
         'visitor_name' => $request->visitor_name,
         'visitor_email' => $request->visitor_email,
         'visitor_checkin' => $request->visitor_checkin,
         'visitor_checkout' => $request->visitor_checkout,
         'visitor_package' => $request->visitor_package,
         'visitor_room' => $request->visitor_room,
         'visitor_phone' => $request->visitor_phone,
         'visitor_adults' => $request->visitor_adults,
         'visitor_children' => $request->visitor_children,
        );
        // return $data;
        $send = Mail::send('frontEnd.emails.homebooking', $data, function($textmsg) use ($data){
         $textmsg->from($data['visitor_email']);
         $textmsg->to('polashpk566@gmail.com');
         $textmsg->subject($data['visitor_name']);
        });
        if($send){
          Toastr::success('message', 'Booking successfully!');
          return redirect()->back();
        }else{
          Toastr::success('message', 'Booking successfully!');
          return redirect()->back();
        }
    }

    // Request Proposal 

    public function requestproposal(Request $request){
      $this->validate($request, [
         'proposal_email'=>'required',
         'proposal_phone'=>'required',
         'proposal_checkInDate'=>'required',
         'proposal_sitplans'=>'required',
         'proposal_ai'=>'required',
        ]);
      $data = array(
         'proposal_name' => $request->proposal_name,
         'proposal_email' => $request->proposal_email,
         'proposal_phone' => $request->proposal_phone,
         'proposal_company' => $request->proposal_company,
         'proposal_checkInDate' => $request->proposal_checkInDate,
         'proposal_numberofGuests' => $request->proposal_numberofGuests,
         'proposal_catering' => $request->proposal_catering,
         'proposal_sitplans' => $request->proposal_sitplans,
         'proposal_ai' => $request->proposal_ai,
        );
        $send = Mail::send('frontEnd.emails.requestproposal', $data, function($textmsg) use ($data){
         $textmsg->from($data['proposal_email']);
         $textmsg->to('polashpk566@gmail.com');
         $textmsg->subject($data['proposal_ai']);
        });


        if($send){
          Toastr::success('message', 'Proposal successfully!');
          return redirect()->back();
        }else{
          Toastr::success('message', 'Proposal successfully!');
          return redirect()->back();
        }
    }
    // Visitor Book Now  

    public function visitorbooknow(Request $request){
      $data = array(
         'book_checkInDate'     => $request->book_checkInDate,
         'book_checkOutDate'    => $request->book_checkOutDate,
         'book_adults'          => $request->book_adults,
         'book_children'        => $request->book_children,
         'book_package'         => $request->title,
         'book_phone'           => $request->book_phone,
         'book_name'            => $request->book_name,
         'book_email'           => $request->book_email,
         'book_passport'        => $request->book_passport,
         'book_ai'              => $request->book_ai,
        );
        // return $data;
        $files = $request->file('book_passport');
        $send = Mail::send('frontEnd.emails.booknow', $data, function($textmsg) use ($data, $files){
         $textmsg->from($data['book_email']);
         $textmsg->to('polashpk566@gmail.com');
         $textmsg->subject($data['book_ai']);
         $textmsg->attach($data['book_passport']->getRealPath(),array(
             'as'=>'book_passport'.$data['book_passport']->getClientOriginalExtension(),'mime'=>$data['book_passport']->getMimeType()));
        
        });
        if($send){
          Toastr::success('message', 'Booking successfully!');
          return redirect()->back();
        }else{
          Toastr::success('message', 'Booking successfully!');
          return redirect()->back();
        }
    }


}

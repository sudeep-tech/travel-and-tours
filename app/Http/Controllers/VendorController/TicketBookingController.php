<?php

namespace App\Http\Controllers\VendorController;

use App\Http\Controllers\Controller;
use App\ticketbooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\User;

class TicketBookingController extends Controller
{
    //  protected $roomDetail=null;
    protected $ticketbooking=null;
    protected $user=null;
    public function __construct(ticketbooking $ticketbooking,user $user)
    {
        $this->ticketbooking=$ticketbooking;
        $this->user=$user;
      
    }
    public function ticketBookingAddView(Request $request){
        $this->user=$this->user->where(['role'=>'user'])->get();
            return view('vendor-dashboard.pages.ticketbookingadd')->with('users',$this->user);                                          
    }
  
    public function saveTickectDetails(Request $request){
  //  dd($request);
        // $act='Add';
       // if($request->id){
           // $act='updat';
          // $this->ticketbooking=$this->ticketbooking->find($request->id);
       // }
       
       // $rules=$this->ticketbooking->getAddRules();
       // $request->validate($rules);
     

        // $data['property_name']=$request->property_name;
        // $data['property_address']=$request->property_address;
        // $data['district_id']=$request->district_id;
        // $data['language_spoken']=$request->language_spoken;
        // $data['description']=$request->description;
        // $data['user_id']=$request->user()->id;
        // $data['no_of_floors']=$request->no_of_floors;
       
        //$this->ticketbooking->fill($data);
       // dd($request);
        $act='Add';
        if($request->id){
            $act='Updat';
        
     
        $this->ticketbooking=$this->ticketbooking->find($request->id);

        }
        $data=$request->except('_token');

        $this->ticketbooking->fill($data);
        $succ=$this->ticketbooking->save();
        if($succ){
            $request->session()->flash('success','Ticket Booking Has Been '.$act.'ed Successfully.');
            return redirect()->route('ticketbooking');
        }else{
            $request->session()->flash('error','Error While'.$act.'ing District!');
            return redirect()->route('ticketbooking');
        }
    }


    public function getAllTicketDetails(Request $request){
        $this->ticketbooking= $this->ticketbooking->where(['status'=>'active'])->get();
       return view('vendor-dashboard.pages.ticketbooking')->with('ticketbookings', $this->ticketbooking);
    }
    public function editTicket(Request $request){
        $this->ticketbooking=$this->ticketbooking->find($request->id);
        $this->user=$this->user->where(['role'=>'user'])->get();
        if(isset($this->ticketbooking->id)){
            return view('vendor-dashboard.pages.ticketbookingadd')->with(['ticketbookings'=>$this->ticketbooking,'users'=>$this->user, '_title'=>'Update Ticket Detail']);                                          
        }else{
            $request->session()->flash('error','TicketBookingDetail Not Found!');
            return redirect()->back();
        }
    }

    public function deleteTicketBooking(Request $request){
        $this->ticketbooking=$this->ticketbooking->find($request->id);
        $success=$this->ticketbooking->delete();
        if($success){
            $request->session()->flash('success','Ticket Booking Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While Deleting Ticket Booking.');
            return redirect()->back();
        }
    }
}


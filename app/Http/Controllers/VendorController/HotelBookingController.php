<?php

namespace App\Http\Controllers\VendorController;

use App\hotelbooking;
use App\Http\Controllers\Controller;
use App\HotelDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\User;
use Hotelbooking as GlobalHotelbooking;

class HotelBookingController extends Controller
{
    protected $hotel_details=null;
    protected $hotelbooking=null;
    protected $user=null;
    public function __construct(hotelbooking $hotelbooking, HotelDetail $hotel_details,user $user)
    {
        $this->hotel_details=$hotel_details;
        $this->hotelbooking=$hotelbooking;
        $this->user=$user;
    }

    public function hotelAddView(Request $request){
    //dd($request);
        $this->hotel_details=$this->hotel_details->where('status','active')->get();
        $this->user=$this->user->where(['role'=>'user'])->get();
        if(isset($this->hotel_details[0])){
            return view('vendor-dashboard.pages.hotelbookingadd')->with('hotel_details',$this->hotel_details)->with('users',$this->user);
        }else{
            $request->session()->flash('warning','Add Your Hotel First To Add Room For Them!');
            return redirect()->route('propertydetailadd');
        }
    }
    public function saveDetails(Request $request){
      //dd($request);
        $act='Add';
        if($request->id){
            $act='Updat';
           $this->hotelbooking=$this->hotelbooking->find($request->id);
        }
        $data=$request->except('_token','user_id');
        if(isset($request->user_id)){
            $data['user_id']=$request->user_id;
        }
        $this->hotelbooking->fill($data);
        $succ=$this->hotelbooking->save();

        if($succ){
            $request->session()->flash('success','Your BookingInformation Has Been Added Successfully.');
            return redirect()->route('hotelbooking');
        }else{
            $request->session()->flash('error','Error While Saving Room Information!');
            return redirect()->route('hotelbooking');
        }
    }
    
    public function getAllHotelBookingDetails(Request $request){
        // dd(Hotelbooking::where('status','active')->get());
        $this->hotelbooking= $this->hotelbooking->get();
        // dd($this->hotelbooking);
       return view('vendor-dashboard.pages.hotelbooking')->with('hotelbookings',$this->hotelbooking);
    }
    public function editHotelBooking(Request $request){
        $this->hotelbooking=$this->hotelbooking->find($request->id);
        $this->hotel_details=$this->hotel_details->get();
        $this->user=$this->user->where(['role'=>'user'])->get();
        if(isset($this->hotelbooking->id)){
            return view('vendor-dashboard.pages.hotelbookingadd')->with(['hotelbookings'=>$this->hotelbooking,'users'=>$this->user,'hotel_details'=>$this->hotel_details,'_title'=>'Update Hotel bookings Detail']);                                          
        }else{
            $request->session()->flash('error','Room Detail Not Found!');
            return redirect()->back();
         
        }
    }
    public function deleteBooking(Request $request){
        $this->hotelbooking=$this->hotelbooking->find($request->id);
        $success=$this->hotelbooking->delete();
        if($success){
            $request->session()->flash('success','  Booking Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While Deleting Package.');
            return redirect()->back();
}
    }
}
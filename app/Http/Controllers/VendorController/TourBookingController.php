<?php

namespace App\Http\Controllers\VendorController;

use App\Http\Controllers\Controller;
use App\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\TourBooking;
use App\travelpackage;
use App\User;

class TourBookingController extends Controller
{
    protected $tourbooking=null;
    protected $place =null;
    protected $travelpackage=null;
    protected $user=null;
    
    public function __construct(TourBooking $tourbooking, Places $place,travelpackage $travelpackage,user $user)
    {
     $this->tourbooking=$tourbooking;
     $this->place=$place;
    $this->travelpackage=$travelpackage;
    $this->user=$user;

}
    

    public function tourAddView(Request $request){
        $this->travelpackage=$this->travelpackage->where(['status'=>'active'])->get();
        $this->user=$this->user->where(['role'=>'user'])->get();
        if(isset($this->travelpackage[0])){
            return view('vendor-dashboard.pages.tourbookingadd')->with('travelpackages',$this->travelpackage)->with('users',$this->user);
     }else{
    $request->session()->flash('warning',' Add Tour Package  First !');
    return redirect()->route('tourpackageadd');
     }
        //$this->place=$this->place->where(['user_id'=>$request->user()->id,])->get();
    
       // if(isset($this->place[0])){
         //   return view('vendor-dashboard.pages.tourbookingadd');
      //  }else{
//$request->session()->flash('warning','Add Your Place First To Add TOur booking For Them!');
           // return redirect()->route('placesadd');

  }

    public function saveTourBookingDetails(Request $request){
        // $rule=$this->tourbooking->getAddRules();
        // $request->validate($rule);
        //dd($request);
        $act='Add';
        if($request->id){
            $act='Updat';
           $this->tourbooking=$this->tourbooking->find($request->id);

        }
        $data=$request->except('_token');
        
      
        
        //dd($data);
         $this->tourbooking->fill($data);
         $succ=$this->tourbooking->save();
       
        if($succ){
            $request->session()->flash('success','Place Has Been '.$act.'ed Successfully.');
            return redirect()->route('tourbooking');
        }else{
            $request->session()->flash('error','Error While'.$act.'ing Tour Booking!');
            return redirect()->route('tourbooking');
        }
    }

    public function getAllTourBookingDetails(Request $request) {

        $this->tourbooking= $this->tourbooking->where(['status'=>'active'])->get();
        return view('vendor-dashboard.pages.tourbooking')->with('tourbookings',$this->tourbooking);

     }


    public function editTourBooking(Request $request){
             $this->tourbooking=$this->tourbooking->find($request->id);
             $this->travelpackage=$this->travelpackage->get();

             $this->user=$this->user->where(['role'=>'user'])->get();
            if(isset($this->tourbooking->id)){
                return view('vendor-dashboard.pages.tourbookingadd')->with(['tourbookings'=>$this->tourbooking,'users'=>$this->user,'travelpackages'=>$this->travelpackage,'_title'=>'Update Tour Booking Detail']);                                          
            }else{
                $request->session()->flash('error','The page  is Not Found!');
                return redirect()->back();
    
            }
    }

    public function deleteTourBooking(Request $request){
        $this->tourbooking=$this->tourbooking->find($request->id);
        $this->travelpackage=$this->travelpackage->get();
        $success=$this->tourbooking->delete();
        if($success){
            $request->session()->flash('success','Tour Booking Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While Deleting Tour Booking.');
            return redirect()->back();
        }
    }
}

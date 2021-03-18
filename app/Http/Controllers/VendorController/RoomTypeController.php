<?php

namespace App\Http\Controllers\VendorController;
use App\RoomType;
use App\Http\Controllers\Controller;
use App\RoomDetail;
use App\HotelDetail;

use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    protected $roomDetail=null;
    protected $roomType=null;
    protected $hotel_details=null;

    public function __construct(RoomDetail $roomDetail, HotelDetail $hotel_details,RoomType $roomType)
    {
        $this->roomDetail=$roomDetail;
        $this->hotel_details=$hotel_details;
        $this->roomType=$roomType;
    }

    public function roomTypeAddView(Request $request){
            $this->hotel_details=$this->hotel_details->where('user_id',$request->user()->id)->get();
            if(isset($this->hotel_details[0]->id)){
                return view('vendor-dashboard.pages.roomTypeadd')->with('hotel_details',$this->hotel_details);
            }else{
                $request->session()->flash('warning','Please Add Hotel/Property First');
                return redirect()->route('propertydetailadd');
                
            }
        
    }
    public function saveRoomType(Request $request){
        if(isset($request->hotel_details_id)){

            @$this->hotel_details=$this->hotel_details->find($request->hotel_details_id);
            if(!isset($this->hotel_details->id)){
                return redirect()->back()->with('warning','HotelDetail Not Found!');
            }
            $act='Add';
            if($request->id){
                $act='update';
            $this->roomType=$this->roomType->find($request->id);
            }

            $data=$request->except('_token','image');
            $data['user_id']=$request->user()->id;
            $this->roomType->fill($data);
            $succ=$this->roomType->save();
            if($succ){
                $request->session()->flash('success','Your Room Information Has Been Added Successfully.');
                return redirect()->route('room-type');
            }else{
                $request->session()->flash('error','Error While Saving Room Information!');
                return redirect()->route('room-type');
            }
        }else{
            return redirect()->back()->with('error','Invalid Room Selected !');
        }
    }
    
    public function getAllRoomType(Request $request){

       $all_room_types= $this->roomType->where('user_id',$request->user()->id)->get();
       return view('vendor-dashboard.pages.roomType')->with('roomTypes',$all_room_types);
    }
    
    public function editRoomType(Request $request){
        @$this->hotel_details=$this->hotel_details->where('user_id',$request->user()->id)->get();
    
        $this->roomType=$this->roomType->where(['id'=>$request->id,'user_id'=>$request->user()->id])->first();
        if(isset($this->roomType->id)){
            return view('vendor-dashboard.pages.roomtypeadd')->with(['hotel_details'=>$this->hotel_details,'roomTypes'=>$this->roomType,'_title'=>'Update Room Type']);                                          
        }else{
            $request->session()->flash('error','Room Type Not Found!');
            return redirect()->back();

        }
    }
    public function deleteRoomType(Request $request){
        $this->roomType=$this->roomType->where(['id'=>$request->id,'user_id'=>$request->user()->id])->first();
        $success=$this->roomType->delete();
        if($success){
            $request->session()->flash('success','Room Type Has Been Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While deleting the  Room Type!');
            return redirect()->back();
        }
    }
}



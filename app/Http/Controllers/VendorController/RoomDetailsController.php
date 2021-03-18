<?php

namespace App\Http\Controllers\VendorController;

use App\HotelDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\RoomDetail;
use App\RoomType;

class RoomDetailsController extends Controller
{
    protected $roomDetail=null;
    protected $hotel_details=null;
    protected $roomType=null;
    public function __construct(RoomDetail $roomDetail, HotelDetail $hotel_details, RoomType $roomType)
    {
        $this->roomDetail=$roomDetail;
        $this->hotel_details=$hotel_details;
        $this->roomType=$roomType;
    }

    public function roomAddView(Request $request){
        $this->hotel_details=$this->hotel_details->get();

        if(isset($this->hotel_details[0])){
            $this->roomType=$this->roomType->where('user_id',$request->user()->id)->get();
            return view('vendor-dashboard.pages.roomadd')->with(['hotel_details'=>$this->hotel_details,'room_types'=>$this->roomType]);
        }else{
            $request->session()->flash('warning','Add Your Property First To Add Room For Them!');
            return redirect()->route('propertydetailadd');
        }
    }
    public function saveRoomDetails(Request $request){
        if(isset($request->hotel_details_id)){

            @$this->hotel_details=$this->hotel_details->find($request->hotel_details_id);
            
            $act='Add';
            if($request->id){
                $act='update';
            $this->roomDetail=$this->roomDetail->find($request->id);
            }

            $data=$request->except('_token','image');
            
                if(!$request->id){
                $data['slug']=$this->roomDetail->getSlug(@$this->hotel_details->slug.'-'.@$request->room_no.'-'.rand(0,999));
            }
            // dd($data['slug']);
            $data['user_id']=$request->user()->id;
            $path=public_path().'/uploads/images/room_details';
            if(!File::exists($path)){
                File::makeDirectory($path,0777,true,true);
            }
            if($request->image){
                $file_name='room_detail-'.date('Ymdhis').rand('0','999').'.'.$request->image->getClientOriginalExtension();
                $success=$request->image->move($path,$file_name);
        
                if($success){
                    if(isset($this->roomDetail->image) && !empty($this->roomDetail->image) && file_exists(public_path().'/uploads/images/room_details/'.$this->detail->image)){
                        unlink(public_path().'uploads/images/room_details/'.$this->roomDetail->image);
                    }
                    $data['image']=$file_name;
                }
            }
        
            $this->roomDetail->fill($data);
            $succ=$this->roomDetail->save();
            if($succ){
                $request->session()->flash('success','Your Room Information Has Been Added Successfully.');
                return redirect()->route('room');
            }else{
                $request->session()->flash('error','Error While Saving Room Information!');
                return redirect()->route('room');
            }
        }else{
            return redirect()->back()->with('error','Invalid Hotel/Property Selected !');
        }
    }
    
    public function getAllRoomDetails(Request $request){
       $all_room_detail= $this->roomDetail->where('user_id',$request->user()->id)->get();
       return view('vendor-dashboard.pages.room')->with('room_details',$all_room_detail);
    }
    public function editRoom(Request $request){
    
        $this->roomDetail=$this->roomDetail->find($request->id);
        $this->hotel_details=$this->hotel_details->get();
        if(isset($this->roomDetail->id)){
            $this->roomType=$this->roomType->where('user_id',$request->user()->id)->get();
            return view('vendor-dashboard.pages.roomadd')->with(['hotel_details'=>$this->hotel_details,'room_types'=>$this->roomType,'_title'=>'Update Room Detail']);                                          
        }else{
            $request->session()->flash('error','Room Detail Not Found!');
            return redirect()->back();

        }
    }
    public function deleteRoom(Request $request){
        $this->roomDetail=$this->roomDetail->find($request->id);
        $success=$this->roomDetail->delete();
        if($success){
            $request->session()->flash('success','Room Detail Has Been Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While deleting the  District!');
            return redirect()->back();
        }
    }

    public function getRoomTypeByHotelDetailsId(Request $request){
        @$this->roomType=$this->roomType->where('hotel_details_id',$request->hotel_details_id);
        return response()->json(['status'=>true,'data'=>$this->roomType]);
    }
}


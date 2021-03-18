<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Places;
use App\District;
use App\travelpackage;
use App\HotelDetail;
use App\HotelPackage;
use App\RoomDetail;
use App\hotelbooking;
use Hotelbooking as GlobalHotelbooking;

class FrontendController extends Controller
{
    protected $place=null;
    protected $district=null;
    protected $hotel_detail=null;
    protected $tourpackage=null;
    protected $roomDetail=null;
    protected $hotel_packages=null;
    protected $hotelbooking=null;

    public function __construct(Places $place,District $district, travelpackage $tourpackage,HotelDetail $hotel_detail,RoomDetail $roomDetail, HotelPackage $hotel_packages,hotelbooking $hotelbooking)
    {
     $this->place=$place;
     $this->district=$district;
     $this->tourpackage=$tourpackage;
     $this->hotel_detail=$hotel_detail;
     $this->roomDetail=$roomDetail;
     $this->hotel_packages=$hotel_packages;
     $this->hotelbooking=$hotelbooking;

    
    }


    public function home(Request $request){
        $this->place=$this->place->take(6)->get();
        $this->hotel_detail=$this->hotel_detail->take(6)->get();
        $this->tourpackage=$this->tourpackage->take(6)->get();
        return view('frontend.pages.index')->with(['hotel_details'=>$this->hotel_detail,'places'=>$this->place,'tour_package'=>$this->tourpackage]);
    }
    public function showPlaceByTravelType(request $request){
        $this->place=$this->place->where('travel_type',$request->travel_type)->paginate(10);
            if(isset($this->place[0]->id)){
            
                return view('frontend.pages.places')->with('details',$this->place);

            }
            else{

                $request->session()->flash('error',"No Data Found For ".ucwords(str_replace('_',' ',$request->travel_type)));
                return redirect()->back();
            }
    }
         public function showPlaceDetail(Request $request){
            $this->place=$this->place->where('slug',$request->slug)->first();
            $related_hotels=HotelDetail::where('property_name','like','%'.$this->hotel_detail->property_name.'%')->get()->except($this->hotel_detail->id)->take(5);
            if($this->place->id){
                return view('frontend.pages.place_details')->with('place_details',$this->place)
                                                      ->with('related_hotels',$related_hotels);
                                                               

            }
            else{

                $request->session()->flash('error','Place not Found !');
                return redirect()->back();
        
        }
    }

    public function showTourPackageByTravelType(request $request){
        $this->tourpackage=$this->tourpackage->where('travel_type',$request->travel_type)->paginate(10);
            if($this->tourpackage[0]->id){
                return view('frontend.pages.tourpackages')->with(['details'=>$this->tourpackage,'_title'=>ucwords(str_replace('_',' ',$request->travel_type))]);

            }
            else{

                $request->session()->flash('error','Tour package not Found !');
                return redirect()->back();
            }
    }
         public function showTourPackageDetail(Request $request){
            $this->tourpackage=$this->tourpackage->where('slug',$request->slug)->first();
            $related_tourpackages=travelpackage::where('travel_type','like','%'.$this->tourpackage->travel_type.'%')->get()->except($this->tourpackage->id)->take(5);
            if($this->tourpackage->id){
                return view('frontend.pages.tourpackages_details')->with('tourpackages_details',$this->tourpackage)
                ->with('related_tourpackages',$related_tourpackages);
                                        
            }
            else{

                $request->session()->flash('error','Place not Found !');
                return redirect()->back();
        
        }
    }

    public function showHotel(request $request){
        $this->hotel_detail=$this->hotel_detail->where('status','active')->paginate(10);
            if($this->hotel_detail[0]->id){
                return view('frontend.pages.hotels')->with('details',$this->hotel_detail);
            }
            else{

                $request->session()->flash('error','Hotels not found  !');
                return redirect()->back();
            }
    }

    public function showHotelDetail(Request $request){
        $this->hotel_detail=$this->hotel_detail->where('slug',$request->slug)->first();
       $related_hotels=HotelDetail::where('property_address','like','%'.$this->hotel_detail->property_address.'%')->get()->except($this->hotel_detail->id)->take(5);
       
        if($this->hotel_detail->id){
            return view('frontend.pages.hotel_details')->with('hotel_details',$this->hotel_detail)
                                                    ->with('related_hotels',$related_hotels)->with('hotelbooking',$this->hotelbooking);

        }
        else{

            $request->session()->flash('error','Place not Found !');
            return redirect()->back();
}   


    }
    public function showRoomDetail(request $request){
        $this->roomDetail=$this->roomDetail->where('slug',$request->slug)->first();
        $related_rooms=RoomDetail::where('room_type','like','%'.$this->roomDetail->room_type.'%')->get()->except($this->roomDetail->id)->take(5);
       
            if(isset($this->roomDetail->id)){
                return view('frontend.pages.room_details')->with('room_details',$this->roomDetail)
                ->with('related_rooms',$related_rooms);


            }
            else{

                $request->session()->flash('error','Rooms not found  !');
                return redirect()->back();
            }


    }
           
//     public function showRoom(Request $request){
//         $this->roomDetail=$this->roomDetail->where('status','active')->paginate(10);
//         if($this->roomDetail[0]->id){
//             return view('frontend.pages.hotel_details')->with('details',$this->roomDetail);

//         }
//         else{

//             $request->session()->flash('error','Place not Found !');
//             return redirect()->back();
// }   
//     }

public function showHotelPackageDetail(Request $request){
    $this->hotel_packages=$this->hotel_packages->where('slug',$request->slug)->first();
   
        if(isset($this->hotel_packages->id)){
            return view('frontend.pages.hotel_packages')->with('hotel_packages',$this->hotel_packages);

        }
        else{

            $request->session()->flash('error','Rooms not found  !');
            return redirect()->back();
        }



}
public function postHotelBooking(Request $request ){
    $this->hotel_detail=$this->hotel_detail->where('slug',$request->hotel_slug)->first();
        $data=$request->except('_token');
        $data['hotel_details_id']=$this->hotel_detail->id;
        if(isset($request->user()->id)){
            $data['user_id']=$request->user()->id;
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
}
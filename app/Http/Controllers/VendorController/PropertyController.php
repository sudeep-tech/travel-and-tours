<?php

namespace App\Http\Controllers\VendorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HotelDetail;
use Illuminate\Support\Facades\File;
class PropertyController extends Controller
{
    protected $hotel_detail=null;

    public function __construct(HotelDetail $hotel_detail)
    {
        $this->hotel_detail=$hotel_detail;
    }

    public function savePropertyDetail(Request $request){
      
        $act='Add';
        if($request->id){
            $act='Updat';
           $this->hotel_detail=$this->hotel_detail->find($request->id);
        }
    
      
        $data=$request->except('_token','image');
        if(!isset($request->id)){
            $data['slug']=$this->hotel_detail->getSlug($request->property_name);
        }
        $data['user_id']=$request->user()->id;
        
        $path=public_path().'/uploads/images/hotel_details';
        if(!File::exists($path)){
            File::makeDirectory($path,0777,true,true);
        }
        if($request->image){
            $file_name='hoteldetails-'.date('Ymdhis').rand('0','999').'.'.$request->image->getClientOriginalExtension();
            $success=$request->image->move($path,$file_name);
    
            if($success){
                if(isset($this->hotel_detail->image) && !empty($this->hotel_detail->image) && file_exists(public_path().'/uploads/images/hotel_details/'.$this->hotel_detail->image)){
                    unlink(public_path().'uploads/images/hotel_details/'.$this->hotel_detail->image);
                }
                $data['image']=$file_name;
            }
        }
       
    
        $this->hotel_detail->fill($data);
        $success=$this->hotel_detail->save();

        if($success){
            $request->session()->flash('success','Your Property Has Been '.$act.'ed Successfully.');
            return redirect()->route('propertydetail');
        }else{
            $request->session()->flash('error','Error While Saving Property Detail!');
            return redirect()->route('propertydetail');
        }
    }

    public function getAllProperties(Request $request){
       $all_property_detail= $this->hotel_detail->where('status','active')->get();
       return view('vendor-dashboard.pages.propertydetail')->with('property_details',$all_property_detail);
    }
    public function editProperty(Request $request){
        $this->hotel_detail=$this->hotel_detail->find($request->id);

        if(isset($this->hotel_detail->id)){
            return view('vendor-dashboard.pages.propertydetailadd')->with(['property_detail'=>$this->hotel_detail,'_title'=>'Update Property Detail']);                                          
        }else{
            $request->session()->flash('warning','Property Detail Not Found!');
            return redirect()->back();
        }
    }
    
    public function deleteProperty(Request $request){
        $this->hotel_detail=$this->hotel_detail->find($request->id);
        $success=$this->hotel_detail->delete();
        if($success){
            $request->session()->flash('success','Tour Package Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While Deleting   Tour Package.');
            return redirect()->back();

}

}
    
}

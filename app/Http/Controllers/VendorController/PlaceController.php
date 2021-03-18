<?php

namespace App\Http\Controllers\VendorController;

use App\District;
use App\Http\Controllers\Controller;
use App\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PlaceController extends Controller
{
    protected $place=null;
    protected $district=null;
    public function __construct(Places $place,District $district)
    {
     $this->place=$place;
     $this->district=$district;
     
    }

    public function placeAddView(Request $request){
        $this->district=$this->district->where('status','active')->get();
      return view('vendor-dashboard.pages.placesadd')->with('districts',$this->district);
    }
    public function savePlaceDetails(Request $request){
        // $rule=$this->place->getAddRules();
        // $request->validate($rule);
        // dd($request);
       
        $act='Add';
        if($request->id){
            $act='Updat';
           $this->place=$this->place->find($request->id);

        }

        if(!$request->id){
            $data['slug']=$this->place->getSlug($request->Title);
        }
        $data=$request->except('_token','image');
        $data['user_id']=$request->user()->id;
      
        $path=public_path().'/uploads/images/place_details';
        if(!File::exists($path)){
            File::makeDirectory($path,0777,true,true);
        }
        if($request->image){
            $file_name='Place-'.date('Ymdhis').rand('0','999').'.'.$request->image->getClientOriginalExtension();
            $success=$request->image->move($path,$file_name);
    
            if($success){
                if(isset($this->place->image) && !empty($this->place->image) && file_exists(public_path().'/uploads/images/place_details/'.$this->place->image)){
                    unlink(public_path().'/uploads/images/place_details/'.$this->place->image);
                }
                $data['image']=$file_name;
            }
        }
     
         $this->place->fill($data);
         $succ=$this->place->save();

        if($succ){
            $request->session()->flash('success','Place Has Been '.$act.'ed Successfully.');
            return redirect()->route('places');
        }else{
            $request->session()->flash('error','Error While'.$act.'ing District!');
            return redirect()->route('places');
        }
    }
    public function getAllPlaceDetails(Request $request) {
        $all_place= $this->place->where('status','active')->get();
        return view('vendor-dashboard.pages.places')->with('place_details',$all_place);
     }


    public function editPlace(Request $request){
        $this->place=$this->place->find($request->id);
        $this->district=$this->district->get();

            if(isset($this->place->id)){
                return view('vendor-dashboard.pages.placesadd')->with(['place_details'=>$this->place,'districts'=>$this->district,'_title'=>'Update Place Detail']);                                          
            }else{
                $request->session()->flash('error','The page  is Not Found!');
                return redirect()->back();
    
            }
    }

    public function deletePlace(Request $request){
        $this->place=$this->place->find($request->id);
        $success=$this->place->delete();
        if($success){
            $request->session()->flash('success','Place Has Been added Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error Whileing Delteing District!');
            return redirect()->back();
        }
    }
}

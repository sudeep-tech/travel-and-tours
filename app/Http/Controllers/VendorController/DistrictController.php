<?php

namespace App\Http\Controllers\VendorController;

use App\District;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DistrictController extends Controller
{
     protected $district=null;
    
    public function __construct(District $district)
    {
     $this->district=$district;
     
    }

    public function districtAddView(Request $request){
      return view('vendor-dashboard.pages.districtadd');
    }
    public function saveDistrictDetails(Request $request){
        // $rule=$this->district->getAddRules();
        // $request->validate($rule);
        $act='Add';
        if($request->id){
            $act='Updat';
           $this->district=$this->district->find($request->id);
        }
        $data=$request->except('_token','image');
        $data['user_id']=$request->user()->id;

        $path=public_path().'/uploads/images/district';
        if(!File::exists($path)){
            File::makeDirectory($path,0777,true,true);
        }
        if($request->image){
            $file_name='District-'.date('Ymdhis').rand('0','999').'.'.$request->image->getClientOriginalExtension();
            $success=$request->image->move($path,$file_name);
    
            if($success){
                if(isset($this->district->image) && !empty($this->district->image) && file_exists(public_path().'/uploads/images/district/'.$this->district->image)){
                    unlink(public_path().'uploads/images/district/'.$this->district->image);
                }
                $data['image']=$file_name;
            }
        }
     
         $this->district->fill($data);
         $succ=$this->district->save();

        if($succ){
            $request->session()->flash('success','District Has Been '.$act.'ed Successfully.');
            return redirect()->route('district');
        }else{
            $request->session()->flash('error','Error While'.$act.'ing District!');
            return redirect()->route('district');
        }
    }
    public function getAllDistrictDetails(Request $request) {
        $all_district= $this->district->where('status','active')->get();
        
        return view('vendor-dashboard.pages.district')->with('district_details',$all_district);
     }


    public function editDistrict(Request $request){
             $this->district=$this->district->find($request->id);
            if(isset($this->district->id)){
                return view('vendor-dashboard.pages.districtadd')->with(['districts'=>$this->district,'_title'=>'Update District Detail']);                                          
            }else{
                $request->session()->flash('error','District Not Found!');
                return redirect()->back();
    
            }
    }

    public function deleteDistrict(Request $request){
        $this->district=$this->district->find($request->id);
        $success=$this->district->delete();
        if($success){
            $request->session()->flash('success',' District Has Been Deleted Successfully.');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Error While Deleting The District.');
            return redirect()->back();
        }
    }
}

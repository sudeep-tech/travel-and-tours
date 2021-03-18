<?php

namespace App\Http\Controllers\VendorController;
use App\HotelDetail;
use App\Http\Controllers\Controller;
use App\HotelPackage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class PackageController extends Controller
{  
    protected $package=null;
    protected $hotel_details=null;
    public function __construct(HotelPackage $package, HotelDetail $hotel_details)
    {
     $this->package=$package;
     $this->hotel_details=$hotel_details;
    }

    public function packageAddView(Request $request){
        $this->hotel_details=$this->hotel_details->get();
        if(isset($this->hotel_details[0])){
            return view('vendor-dashboard.pages.packageadd')->with('hotel_details',$this->hotel_details);
        }else{
            $request->session()->flash('warning','Add Your Property First To Add Package For Them!');
            return redirect()->route('propertydetailadd');
        }
    }
    public function savePackage(Request $request){
       
        // $rule=$this->package->getAddRules();
        // $request->validate($rule);
       
        $act='Add';
        if($request->id){
            $act='Updat';
        }
        $data=$request->except('_token','image');
        $data['user_id']=$request->user()->id;

        $path=public_path().'/uploads/images/hotel_packages';
        if(!File::exists($path)){
            File::makeDirectory($path,0777,true,true);
        }
        if($request->image){
            $file_name='Package-'.date('Ymdhis').rand('0','999').'.'.$request->image->getClientOriginalExtension();
            $success=$request->image->move($path,$file_name);
    
            if($success){
                if(isset($this->package->image) && !empty($this->package->image) && file_exists(public_path().'/uploads/images/hotel_packages/'.$this->package->image)){
                    unlink(public_path().'uploads/images/hotel_packages/'.$this->package->image);
                }
                $data['image']=$file_name;
            }
        }
     
         $this->package->fill($data);
         $succ=$this->package->save();

        if($succ){
            $request->session()->flash('success','Package Has Been '.$act.'ed Successfully.');
            return redirect()->route('package');
        }else{
            $request->session()->flash('error','Error While'.$act.'ing Hotel Package!');
            return redirect()->route('package');
        }
    }
    public function getAllPackage(Request $request) {
        $all_package= $this->package->getAllPackageDetailsByUserId($request->user()->id);
       
        return view('vendor-dashboard.pages.package')->with('packages',$all_package);
     }


    public function editPackage(Request $request){
        
        $this->hotel_details=$this->hotel_details->where('user_id',$request->user()->id)->get();
             $this->package=$this->package->find($request->id);
            if(isset($this->package->id)){
                return view('vendor-dashboard.pages.packageadd')->with(['hotel_details'=>$this->hotel_details,'packages'=>$this->package,'_title'=>'Update  Package  Detail']);                                          
            }else{
                $request->session()->flash('error','Package is Not Found!');
                return redirect()->back();


            }
        }      
        
        
        public function deletePackage(Request $request){
            $this->package=$this->package->find($request->id);
            $success=$this->package->delete();
            if($success){
                $request->session()->flash('success',' Package Deleted Successfully.');
                return redirect()->back();
            }else{
                $request->session()->flash('error','Error While Deleting Package.');
                return redirect()->back();
    
            }
    }
    
}



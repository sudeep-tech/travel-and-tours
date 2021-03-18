<?php

namespace App\Http\Controllers\VendorController;
use App\Http\Controllers\Controller;
use App\travelpackage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class TourPackageController extends Controller
{  
    protected $package=null;
   
    public function __construct(travelpackage $package)
    {
     $this->package=$package;
     
    }

    public function tourpackageAddView(Request $request){
        $this->package=$this->package->where('status','active')->get(); 
      return view('vendor-dashboard.pages.tourpackageadd');
    }
    public function saveTourPackage(Request $request){
        // $rule=$this->package->getAddRules();
        //dd($request);
        // $request->validate($rule);
        $act='Add';
        if($request->id){
            $act='Updat';
            $this->package=$this->package->find($request->id);
        }
       
       
       
        $data=$request->except('_token','image');
        if(!isset($request->id)){
            $data['slug']=$this->package->getSlug($request->Title);
        }
        $data['user_id']=$request->user()->id;
        
        $path=public_path().'/uploads/images/tour_packages';
        if(!File::exists($path)){
            File::makeDirectory($path,0777,true,true);
        }
        if($request->image){
            $file_name='TourPackage-'.date('Ymdhis').rand('0','999').'.'.$request->image->getClientOriginalExtension();
            $success=$request->image->move($path,$file_name);
    
            if($success){
                if(isset($this->package->image) && !empty($this->package->image) && file_exists(public_path().'/uploads/images/tour_packages/'.$this->package->image)){
                    unlink(public_path().'/uploads/images/tour_packages/'.$this->package->image);
                }
                $data['image']=$file_name;
            }
        }
       // dd($this->package);
         $this->package->fill($data);
         $succ=$this->package->save();

        if($succ){
            $request->session()->flash('success','Package Has Been '.$act.'ed Successfully.');
            return redirect()->route('tourpackage');
        }else{
            $request->session()->flash('error','Error While'.$act.'ing Hotel Package!');
            return redirect()->route('tourpackage');
        }
    }
    public function getAllTourPackage(Request $request) {
        $all_package= $this->package->where('status','active')->get();
        // $this->package->getAllTourPackageDetails();
        return view('vendor-dashboard.pages.tourpackage')->with('travelpackages',$all_package);
     }


    public function editTourPackage(Request $request){
             $this->package=$this->package->find($request->id);
            if(isset($this->package->id)){
                return view('vendor-dashboard.pages.tourpackageadd')->with(['tourpackages'=>$this->package,'_title'=>'Update Travel  Package  Detail']);                                          
            }else{
                $request->session()->flash('error','Package is Not Found!');
                return redirect()->back();

            }

            }
            public function deleteTourPackage(Request $request){
                $this->package=$this->package->find($request->id);
                $success=$this->package->delete();
                if($success){
                    $request->session()->flash('success','Tour Package Deleted Successfully.');
                    return redirect()->back();
                }else{
                    $request->session()->flash('error','Error While Deleting   Tour Package.');
                    return redirect()->back();
        
    }

}

}

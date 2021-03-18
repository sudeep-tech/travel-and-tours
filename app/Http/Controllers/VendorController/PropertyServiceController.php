<?php

namespace App\Http\Controllers;

use HotelServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyServiceController extends Controller
{
 //  protected $roomDetail=null;
 protected $property_service=null;
 public function __construct(HotelServices $property_service)
 {
     $this->property_service=$property_service;
   
 }
 public function propertyserviceAddView(Request $request){
         return view('vendor-dashboard.pages.propertyserviceadd')->with('_title','Add Ticket Detail');                                          
 }

 public function savePropertyServiceDetails(Request $request){
   
     $act='Add';
     if($request->id){
         $act='updat';
        $this->property_service=$this->property_service->find($request->id);
     }
    
     $rules=$this->property_service->getAddRules();
     $request->validate($rules);
  

     // $data['property_name']=$request->property_name;
     // $data['property_address']=$request->property_address;
     // $data['district_id']=$request->district_id;
     // $data['language_spoken']=$request->language_spoken;
     // $data['description']=$request->description;
     // $data['user_id']=$request->user()->id;
     // $data['no_of_floors']=$request->no_of_floors;
     
     
     $succ=$this->property_service->save();
     if($succ){
         $request->session()->flash('success','Ticket Property Service Has Been '.$act.'ed Successfully.');
         return redirect()->route('propertyservice');
     }else{
         $request->session()->flash('error','Error While'.$act.'ing Property Service!');
         return redirect()->route('propertyservice');
     }
 }

 
 public function getAllPropertyServiceDetails(Request $request){
    $all_ticket_detail= $this->property_service->where('user_id',$request->user()->id)->get();
    return view('vendor-dashboard.pages.propertyservice')->with('property_service',$all_ticket_detail);
 }
 public function editPropertyService(Request $request){
     $this->property_service=$this->property_service->find($request->id);
     if(isset($this->property_service->id)){
         return view('vendor-dashboard.pages.propertyserviceadd')->with(['property_service'=>$this->property_service,'_title'=>'Update Ticket Detail']);                                          
     }else{
         $request->session()->flash('error','Property service  Not Found!');
         return redirect()->back();
     }
 }
}

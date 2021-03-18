<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    protected $table='tour_bookings';
    protected $fillable=['user_id','travel_package_id','name','age_requirement','num_people','email','travel_period','travel_style','guide','price','description','status'];

    public function getAddRules(){
        return [
               'travel_package_id'=>'sometimes|nullable',
                'name'=>'required|string',
                'age_requirement'=>'required|numeric',
                'num_people'=>'sometimes|numeric|nullable',
                'email'=>'required|string',
                'travel_period'=>'required|string',
                'travel_style'=>'required|nullable',
                'guide'=>'required|string',
                'price'=>'required|numeric|string',
                'description'=>'string|nullable',
                
                'status'=>'sometimes|string|in:active,inactive',
            ];
        }


public function travelpackages(){
    return  $this->hasOne('App\travelpackage','id','travel_package_id');


  }
  public function user(){
    return  $this->hasOne('App\User','id','user_id');
}
}
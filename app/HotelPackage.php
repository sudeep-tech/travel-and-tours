<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelPackage extends Model
{
    protected $table='hotel_packages';
    protected $fillable=['package_title','user_id','hotel_details_id','car_service','pickup_time','pickup_destination','no_people','breakfast','lunch','dinner','visit_localplace','image','description','status','slug'];

    public function getAddRules(){
        return ['car_service'=>'required|string',
                'pickup_time'=>'required|numeric|max:191',
                'no_people'=>'required|numeric',
                'breakfast'=>'required|string|nullable',
                'lunch'=>'required|string|nullable',
                'dinner'=>'required|string|nullable',
                'visit_localplace'=>'required|string|nullable',
                'image'=>'sometimes|string|nullable',
                'description'=>'sometimes|string|nullable',
               'status'=>'sometimes|string|in:active,inactive',
            ];
    }
    public function hotel_details(){
        return $this->hasOne('App\HotelDetail','id','hotel_details_id');
    }
    public function getAllPackageDetailsByUserId($user_id){
        return $this->with('hotel_details')->where('user_id',$user_id)->get();
    }
}
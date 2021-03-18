<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RoomDetail extends Model
{
    protected $fillable=['room_no','room_type','user_id','hotel_details_id','free_wifi','bed_option','smoking_policy','Bathtub','room_service','aircondition','balcony','Floor_level','Tv','attach_bathroom','description','image','status','slug'];

    public function getAddRules(){
        return ['room_type'=>'required|exists in:room_types,id',
                'room_no'=>'required|numeric',
                'room_service'=>'required|string',
                'image'=>'sometimes|string|nullable',
                'aircondition'=>'required|string|in:yes,no',
                'free_wifi'=>'required|string|in:yes,no',
                'Tv'=>'required|string|in:yes,no',
                'smoking_policy'=>'required|string|in:yes,no',
                'Bathtub'=>'required|string|in:yes,no',
                'balcony'=>'required|string|in:yes,no',
                'Floor_level'=>'sometimes|string|nullable',
                'attach_bathroom'=>'required|string|in:yes,no',
                'bed_option'=>'required|string|in:single,double,triple',
                'description'=>'sometimes|nullable',
                'status'=>'sometimes|string|in:active,inactive',

            ];
        }

        
public function hotel_details(){
    return  $this->hasOne('App\HotelDetail','id','hotel_details_id');
  }
  public function room_types(){
    return  $this->hasOne('App\RoomType','id','room_type');
  }
  public function getAllRoomDetailsByUserId($user_id){
    return $this->with('hotel_details')->where('user_id',$user_id)->get();
}
   public function getSlug($string)
{
     $slug = Str:: slug($string);
     $found = $this->where('slug',$slug)->first();
    if($found) {
    $slug .="-" . date('Ymdhis'). rand(0,99);
}
return $slug;
}
}
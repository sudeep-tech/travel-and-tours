<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RoomType extends Model
{
    protected $fillable=['room_type','hotel_details_id','user_id','room_price','status','slug'];

    public function getAddRules(){
        return ['room_type'=>'required|string',
                'room_price'=>'required|numeric',
                'status'=>'sometimes|string|in:active,inactive',
            ];
        }

        
public function hotel_details(){
    return  $this->hasOne('App\HotelDetail','id','hotel_details_id');
  }
  public function room_details(){
    return  $this->hasOne('App\HotelDetail','id','hotel_details_id');
  }
  public function user(){
    return  $this->hasOne('App\User','id','user_id');
  }
  public function getAllRoomTypeByHotelDetailsId($hotel_details_id){
    return $this->where('hotel_details_id',$hotel_details_id)->get();
}
}
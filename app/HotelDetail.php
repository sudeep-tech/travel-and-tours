<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HotelDetail extends Model
{
    protected $table='hotel_details';
    protected $fillable=['property_name','property_address','phone_num','district_id','language_spoken','description','user_id','no_of_floors','image','status','slug'];

    public function getAddRules(){
        return ['property_name'=>'required|string',
                'property_address'=>'required|string|max:191',
                'district_id'=>'required|numeric',
                'phone_num'=>'required|string|max:17',
                'language_spoken'=>'sometimes|string|nullable',
                'description'=>'string|nullable',
                'image'=>'sometimes|string|nullable',
                'no_of_floors'=>'sometimes|numeric|nullable',
                'status'=>'sometimes|string|in:active,inactive',
                
    ];
}

     public function district(){
       return $this->hasOne('App\District','id','district_id');
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

public function room(){
    return  $this->hasMany('App\RoomDetail','hotel_details_id','id');
  }
  public function hotel_packages(){
    return  $this->hasMany('App\HotelPackage','hotel_details_id','id');
  }
  public function hotel_bookings(){
    return $this->hasMany('App\hotelbooking','id','hotel_details_id');
  }
}

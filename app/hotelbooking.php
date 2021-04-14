<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class hotelbooking extends Model
{        protected $table='hotelbooking';
       public $timestamps=false;
        protected $fillable=['hotel_details_id','user_id','property_address','contact_name','arrival_date','room_type','mobile_phone','email_address','price','arrival_time','status'];

    public function getAddRules(){
        return [
                'property_address'=>'required|string|max:191',
                'contact_name'=>'required|string|max:191',
                'room_type'=>'required|string|in:single,double,triple',
                'mobile_phone'=>'required|numeric',
                'email_address'=>'required|string',
                'arrival_time'=>'required|numeric',
                'price'=>'required|numeric',
                'arrival_time'=>'required|time',
                'arrival_date'=>'required|date',

               'status'=>'sometimes|string|in:active,inactive',
    ];
}
      
    public function hotel_details(){
        return  $this->hasOne('App\HotelDetail','id','hotel_details_id');
    }
    public function user(){
        return  $this->hasOne('App\User','id','user_id');
}
}

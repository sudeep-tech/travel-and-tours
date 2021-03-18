<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketbooking extends Model
{
    protected $table='ticketbookings';
    protected $fillable=['user_id','current_address','country','leaving_from','mobile_no','from','where','checkin_date','checkout_date','airport_pickup','airlines_name','flight_time','flight_num','adult','child',];

    public function getAddRules(){
        return [
                'current_address'=>'required|string',
                'country'=>'required|string',
                'leaving_from'=>'required|string',
                'mobile_no'=>'required|numeric|nullable',
                'from'=>'required|string',
                'where'=>'required|string',
                'checkin_date'=>'required|numeric|nullable',
                'checkout_date'=>'required|numeric|nullable',
                'airport_pickup'=>'required|string|in:yes','no',
                'airlines_name'=>'required|string|in:buddha','shree','yeti','shaurya','himalayan','summit',
                'leaving_from'=>'required|string',
                'adult'=>'required|string|in:yes,no',
                'children'=>'required|string|in:yes,no',
                'flight_num'=>'required|numeric|numeric',
                'flight_time'=>'required|numeric',
            ];
        }

public function user(){
    return  $this->hasOne('App\User','id','user_id');
}
}

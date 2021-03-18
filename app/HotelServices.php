<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelServices extends Model
{

    protected $fillable=['hotel_details_id','user_id','meal','reception','meeting_or_banquet_facilites','massage','garden','bar','resturant','shopping','laundary','carpark','lift','swimming_pool'];

    public function getAddRules(){
        return ['meal'=>'required|string',
                'reception'=>'required|string|max:191',
                'meeting_or_banquet_facilities'=>'required|string|in:yes,no',
                'smoking_policy'=>'required|string|in:yes,no',
                'massage'=>'required|string|in:yes,no',
                'garden'=>'required|string|in:yes,no',
                'bar'=>'required|string|in:yes,no',
                'resturant'=>'required|string|in:yes,no',
                'shopping'=>'required|string|in:yes,no',
                'laundary'=>'required|string|in:yes,no',
                'car_park'=>'required|string|in:yes,no',
                'lift'=>'required|string|in:yes,no',
                'swimming_pool'=>'required|string|in:yes,no',
              

    ];
}
}

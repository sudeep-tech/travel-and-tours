<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    
    protected $fillable=['district_name','image','description','state','status'];

    public function getAddRules(){
        return ['district_name'=>'required|string',
                'description'=>'string|nullable',
                'image'=>'sometimes|string|nullable',
                'state'=>'required|string|in:state1,state2,state3,state4,state5,state6,state7',
                'status'=>'sometimes|string|in:active,inactive',
    ];
}
}

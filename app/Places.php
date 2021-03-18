<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Places extends Model
{
    protected $table='places';
    protected $fillable=['Title','overview','district_id','travel_type','weather','description','image','other_images','status','slug'];

    public function getAddRules(){
        return ['Title'=>'required|string',
                'overview'=>'string|nullable',
                'district_id'=>'required|numeric',
                'travel_type'=>'sometimes|string|nullable',
                'weather'=>'required|numeric',
                'description'=>'string|nullable',
                'image'=>'sometimes|string|nullable',
                'other_images'=>'sometimes|string|nullable',
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



}


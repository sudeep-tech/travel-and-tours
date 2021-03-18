<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class travelpackage extends Model
{
    protected $table='travelpackages';
 protected $fillable=
['Title','service_level','age_requirement','num_people','travel_period','travel_type','price','guide','image','description','slug'];

    public function getAddRules(){
        return ['Title'=>'required|string',
                'service_level'=>'required|numeric|max:191',
                'age_requiremnet'=>'required|numeric',
                'num_people'=>'required|string|nullable',
                'travel_type'=>'sometimes|string|nullable',
                'travel_period'=>'required|string|nullable',
                'guide'=>'sometimes|numeric|nullable',
                'price'=>'required|string|nullable',
                'image'=>'sometimes|string|nullable',
                'description'=>'sometimes|string|nullable',
               
            ];
    
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


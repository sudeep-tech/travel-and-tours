<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\travelpackage;

class FrontendController extends Controller
{
    protected $travelpackage=null;
   
    public function __construct(travelpackage $tourpackage)
    {
     $this->tourpackage=$tourpackage;
     
    }
    
}


<?php

namespace App\Http\Controllers;

use App\Places;
use Illuminate\Http\Request;
use App\travelpackage;
use App\HotelDetail;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $hotel_details=null;
    protected $places=null;
    protected $tour_package=null;
    
    public function __construct( HotelDetail $hotel_details,Places $place, travelpackage $tourpackage)
    {    
        $this->middleware('auth');
        $this->middleware('verified');
        $this->places=$place;
        $this->hotel_details=$hotel_details;
        $this->tour_package=$tourpackage;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role=='user'){
            $this->places=$this->places->take(6)->get();
            $this->hotel_details=$this->hotel_details->take(6)->get();
            $this->tour_package=$this->tour_package->take(6)->get();

            return view('frontend.pages.index')->with('hotel_details',$this->hotel_details,'places',$this->places,'tour_package',$this->tour_package);
        }
        if(Auth::user()->role=='vendor'){
            return view('vendor-dashboard.pages.index');
        }
        if(Auth::user()->role=='admin'){
            return view('vendor-dashboard.pages.index');

        }
    }
}

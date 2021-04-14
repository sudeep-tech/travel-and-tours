<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotelbooking;
 use App\master;

class UserbookingForm extends Controller
{
    //
    function save(Request $req)
   {
    $userbooking=new hotelbooking;
    $userbooking-> property_address= $req-> property_address;
    $userbooking-> contact_name= $req->property_name;
    $userbooking-> contact_name= $req->contact_name;
    $userbooking-> mobile_phone= $req-> mobile_phone;
    $userbooking-> email_address= $req-> email_address;
    $userbooking-> price= $req-> price;
    $userbooking-> arrival_time= $req-> arrival_time;
    $userbooking->arrival_date=$req->arrival_date;
    $userbooking->save();
    print_r($req->input());

    }
}
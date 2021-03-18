<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Frontend Routes
Route::get('/home', function () {
    return view('welcome');   
});
Route ::get('/','FrontendControllers\FrontendController@home')->name('home');
Route :: get('/about',function() {
    return view('frontend.pages.about');
})->name('about');
Route :: get('/places',function() {
    return view('frontend.pages.places');
})->name('places');
Route :: get('/Tour',function() {
    return view('frontend.pages.tour');
})->name('tour');
Route :: get('/Pilgrimage-tour',function() {
    return view('frontend.pages.places');
})->name('places');
Route :: get('/Trek',function() {
    return view('frontend.pages.trek');
})->name('trek');
Route :: get('/travel-guide',function() {
    return view('frontend.pages.travel-guide');
})->name('travel guide');



Route :: get('/blog',function() {
    return view('frontend.pages.blog');
})->name('blog');
Route :: get('/contact',function() {
    return view('frontend.pages.contact');
})->name('contact');

Route :: get('/tour',function() {
    return view('frontend.pages.tour');
    
})->name('tour');
Route::get('/tourpackage-by-travel-type/{travel_type}','FrontendControllers\FrontendController@showTourPackageByTravelType')->name('tour_by_travel_type');
Route::get('/front-tourpackage-detail/{slug}','FrontendControllers\FrontendController@showTourPackageDetail')->name('tourpackages_by_detail');

Route :: get('/places',function() {
    return view('frontend.pages.places');
})->name('places');

Route::get('/place-by-travel-type/{travel_type}','FrontendControllers\FrontendController@showPlaceByTravelType')->name('place_by_travel_type');
Route::get('/front-place-detail/{slug}','FrontendControllers\FrontendController@showPlaceDetail')->name('place_by_detail');


Route :: get('/hotels',function() {
    return view('frontend.pages.hotelss');
})->name('hotels');

Route::get('/hotels','FrontendControllers\FrontendController@showHotel')->name('hotels');
Route::get('/front-hotel-detail/{slug}','FrontendControllers\FrontendController@showHotelDetail')->name('hotel_by_detail');
Route::post('/front-post-hotel-booking/{hotel_slug}','FrontendControllers\FrontendController@postHotelBooking')->name('front_post_hotel_booking');


Route::get('/rooms','FrontendControllers\FrontendController@showRoom')->name('rooms');
Route::get('/front-room-detail/{slug}','FrontendControllers\FrontendController@showRoomDetail')->name('room_by_detail');




Route::get('/packages','FrontendControllers\FrontendController@showHotelPackage')->name('packages');
Route::get('/front-hotelpackage-detail/{slug}','FrontendControllers\FrontendController@showHotelPackageDetail')->name('hotelpackage_by_detail');




Route :: get('/blog2',function() {
    return view('frontend.pages.blog2');
})->name('blog2');
Route :: get('/blog3',function() {
    return view('frontend.pages.blog3');
})->name('blog3');
Route :: get('/blog4',function() {
    return view('frontend.pages.blog4');
})->name('blog4');
Route :: get('/blog5',function() {
    return view('frontend.pages.blog5');
})->name('blog5');
Route :: get('/blog6',function() {
    return view('frontend.pages.blog6');
})->name('blog6');
Route :: get('/blog7',function() {
    return view('frontend.pages.blog7');
})->name('blog7');
Route :: get('/blog2',function() {
    return view('frontend.pages.blog7');
})->name('blog7');
Route :: get('/blog2',function() {
    return view('frontend.pages.blog2');
})->name('blog2');
Route :: get('/blog8',function() {
    return view('frontend.pages.blog8');
})->name('blog8');



Auth::routes(['verify' => true]);
// Vendor Routes
Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/',function(){
        return view('auth.vendor.vendor-login');
    })->name('vendor-login');
    Route::get('/register',function(){
        return view('auth.vendor.vendor-register');
    })->name('vendor-register');

    Route::group(['middleware'=>['auth','verified']], function(){

        Route::get('/dashboard',function(){
            return view('vendor-dashboard.pages.index');
        })->name('dashboard');


        Route :: get('/services',function() {
            return view('vendor-dashboard.pages.services');
        })->name('services');


        Route :: get('/basiccalender',function() {
            return view('vendor-dashboard.pages.basiccalender');
        })->name('basiccalender');

        Route :: get('/listview',function() {
            return view('vendor-dashboard.pages.listview');
        })->name('listview');




        Route :: get('/booking',function() {
            return view('vendor-dashboard.pages.booking');
        })->name('booking');

        Route::group(['prefix'=>'property'], function(){
            
        Route :: get('/add',function() {
            return view('vendor-dashboard.pages.propertydetailadd');
        })->name('propertydetailadd');
        Route::post('/post-property-detail','VendorController\PropertyController@savePropertyDetail')->name('post-property-detail');
        Route :: get('/propertydetail','VendorController\PropertyController@getAllProperties')->name('propertydetail');
        Route :: get('/edit-propertydetail/{id}','VendorController\PropertyController@editProperty')->name('edit-propertydetail');
        Route::post('/update-property-detail/{id}','VendorController\PropertyController@savePropertyDetail')->name('update-property-detail');
        Route::get('/delete/{id}','VendorController\PropertyController@deleteProperty')->name('delete-propertydetail');
    });

        Route::group(['prefix'=>'room'], function(){
          
        Route ::get('/add','VendorController\RoomDetailsController@roomAddView')->name('roomadd');

        Route::post('/post-room','VendorController\RoomDetailsController@saveRoomDetails')->name('post-room');
        Route::get('/room','VendorController\RoomDetailsController@getAllRoomDetails')->name('room');
        Route :: get('/edit-room/{id}','VendorController\RoomDetailsController@editRoom')->name('edit-room');
        Route::post('/update-room/{id}','VendorController\RoomDetailsController@saveRoomDetails')->name('update-room');
        Route::get('/delete/{id}','VendorController\RoomDetailsController@deleteRoom')->name('delete-room');
        Route::get('/get-room-type','VendorController\RoomDetailsController@getRoomTypeByHotelDetailsId')->name('ajax-room-type');
        
        });
       
        Route::group(['prefix'=>'room-type'], function(){
            Route ::get('/add','VendorController\RoomTypeController@roomTypeAddView')->name('roomtypeadd');

            Route::post('/post-room-type','VendorController\RoomTypeController@saveRoomType')->name('post-room-type');
            Route::get('/room-type','VendorController\RoomTypeController@getAllRoomType')->name('room-type');
            Route :: get('/edit-room-type/{id}','VendorController\RoomTypeController@editRoomType')->name('edit-room-type');
            Route::post('/update-room-type/{id}','VendorController\RoomTypeController@saveRoomType')->name('update-room-type');
            Route::get('/delete/{id}','VendorController\RoomTypeController@deleteRoomType')->name('delete-room-type');
        });
     
        Route::group(['prefix'=>'ticket-booking'], function(){
            Route :: get('/ticket-booking',function() {
                return view('vendor-dashboard.pages.ticketbooking');
            })->name('ticketbooking');
            Route :: get('/booking','VendorController\TicketBookingController@getAllTicketDetails')->name('ticketbooking');
            Route ::get('/add','VendorController\TicketBookingController@ticketBookingAddView')->name('ticketbookingadd');
            Route::post('/post','VendorController\TicketBookingController@saveTickectDetails')->name('post-ticketbooking');
            Route :: get('/edit-ticketbooking/{id}','VendorController\TicketBookingController@editTicket')->name('edit-ticketbooking');
            Route::post('/update-ticketbooking/{id}','VendorController\TicketBookingController@saveTicketDetails')->name('update-ticketbooking');
            Route::get('/delete/{id}','VendorController\TicketBookingController@deleteTicketBooking')->name('delete-ticketbooking');
            });

            Route::group(['prefix'=>'tour-booking'], function(){
                Route :: get('/booking','VendorController\TourBookingController@getAllTourBookingDetails')->name('tourbooking');
                Route ::get('/add','VendorController\TourBookingController@tourAddView')->name('tourbookingadd');
                Route::post('/post','VendorController\TourBookingController@saveTourBookingDetails')->name('post-tourbooking');
                Route::get('/edit-tourbooking/{id}','VendorController\TourBookingController@editTourBooking')->name('edit-tourbooking');
                Route::post('/update-tourbooking/{id}','VendorController\TourBookingController@saveTourBookingDetails')->name('update-tourbooking');
                Route::get('/delete/{id}','VendorController\TourBookingController@deleteTourBooking')->name('delete-tourbooking');
            });
        Route::group(['prefix'=>'hotel-booking'], function(){
            Route :: get('/booking','VendorController\HotelBookingController@getAllHotelBookingDetails')->name('hotelbooking');
            Route::get('/add','VendorController\HotelBookingController@hotelAddView')->name('hotelbookingadd');
            Route::post('/post-hotelbooking','VendorController\HotelBookingController@saveDetails')->name('post-hotelbooking');
            Route ::get('/edit-hotelbooking/{id}','VendorController\HotelBookingController@editHotelBooking')->name('edit-hotelbooking');
            Route::post('/update-hotelbooking/{id}','VendorController\HotelBookingController@saveDetails')->name('update-hotelbooking');
            Route::get('/delete/{id}','VendorController\HotelBookingController@deleteBooking')->name('delete-hotelbooking');
        });

      
        Route::group(['prefix'=>'district'], function(){
            Route :: get('/','VendorController\DistrictController@getAllDistrictDetails')->name('district');
            Route ::get('/add','VendorController\DistrictController@districtAddView')->name('districtadd');
            Route::post('/post','VendorController\DistrictController@saveDistrictDetails')->name('post-district');
            Route::get('/edit-district/{id}','VendorController\DistrictController@editDistrict')->name('edit-district');
            Route::post('/update-district/{id}','VendorController\DistrictController@saveDistrictDetails')->name('update-district');
            Route::get('/delete/{id}','VendorController\DistrictController@deleteDistrict')->name('delete-district');
        });
        Route::group(['prefix'=>'place'], function(){
            Route :: get('/','VendorController\PlaceController@getAllPlaceDetails')->name('places');
            Route ::get('/add','VendorController\PlaceController@placeAddView')->name('placesadd');
            Route::post('/post','VendorController\PlaceController@savePlaceDetails')->name('post-place');
            Route::get('/edit-place/{id}','VendorController\PlaceController@editPlace')->name('edit-place');
            Route::post('/update-place/{id}','VendorController\PlaceController@savePlaceDetails')->name('update-place');
            Route::get('/delete/{id}','VendorController\PlaceController@deletePlace')->name('delete-place');
        });


        Route :: get('/flight-booking',function() {
            return view('vendor-dashboard.pages.flightbooking');
        })->name('flightbooking');



        Route :: get('/vehicle-booking',function() {
            return view('vendor-dashboard.pages.vehiclebooking');
        })->name('vehiclebooking');


        Route :: get('/mailbox',function() {
            return view('vendor-dashboard.pages.mailbox');
        })->name('mailbox');


        Route::group(['prefix'=>'package'], function(){
        Route :: get('/','VendorController\PackageController@getAllPackage')->name('package');
        Route :: get('/add','VendorController\PackageController@packageAddView')->name('packageadd');
        Route::post('/post','VendorController\PackageController@savePackage')->name('post-package');
        Route :: get('/edit-package/{id}','VendorController\PackageController@editPackage')->name('edit-package');
        Route::post('/update-package/{id}','VendorController\PackageController@savePackage')->name('update-package');
        Route::get('/delete/{id}','VendorController\PackageController@deletePackage')->name('delete-package');

        });


        Route::group(['prefix'=>'tourpackage'], function(){
            Route :: get('/','VendorController\TourPackageController@getAllTourPackage')->name('tourpackage');
            Route :: get('/tourpackageadd','VendorController\TourPackageController@tourpackageAddView')->name('tourpackageadd');
            Route::post('/post-tourpackage','VendorController\TourPackageController@saveTourPackage')->name('post-tourpackage');
            Route :: get('/edit-tourpackage/{id}','VendorController\TourPackageController@editTourPackage')->name('edit-tourpackage');
            Route::post('/update-tourpackage/{id}','VendorController\TourPackageController@saveTourPackage')->name('update-tourpackage');
            Route::get('/delete/{id}','VendorController\TourPackageController@deleteTourPackage')->name('delete-tourpackage');
        });

        Route :: get('/viewroom',function() {
            return view('vendor-dashboard.pages.serviceadd');
        })->name('serviceadd');

        Route :: get('/service-add',function() {
            return view('vendor-dashboard.pages.serviceadd');
        })->name('serviceadd');

        Route :: get('/trekking',function() {
            return view('frontend.pages.trekking');
        })->name('trekking');

        Route :: get('/mountain-adventure',function() {
            return view('vendor-dashboard.pages.mountainadventure');
        })->name('mountain-adventure');

        Route :: get('/cultural-places',function() {
            return view('vendor-dashboard.pages.culturalplaces');
        })->name('culturalplaces');

        Route :: get('/jungle-safari',function() {
            return view('vendor-dashboard.pages.jungle-safari');
        })->name('jungle-safari');

        Route :: get('/paragliding',function() {
            return view('vendor-dashboard.pages.paragliding');
        })->name('paragliding');

        Route :: get('/unesco-site',function() {
            return view('vendor-dashboard.pages.unescosite');
        })->name('unescosite');



        Route :: get('/add',function() {
            return view('vendor-dashboard.pages.add');
        })->name('add');



        Route :: get('/mailcompose',function() {
            return view('vendor-dashboard.pages.mailcompose');
        })->name('mailcompose');


        Route :: get('/mailread',function() {
            return view('vendor-dashboard.pages.mailread');
        })->name('mailread');

        Route :: get('/bookmark',function() {
            return view('vendor-dashboard.pages.bookmark');
        })->name('bookmark');

        Route :: get('/review',function() {
            return view('vendor-dashboard.pages.review');
        })->name('review');

        Route :: get('/userprofile',function() {
            return view('vendor-dashboard.pages.userprofile');
        })->name('userprofile');

    });
});

// Vendor Route Ends
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::domain('admin.'.'localhost')->group(function(){
    Route::get('/',function(){
        return view('login')->name('login');
    });

});


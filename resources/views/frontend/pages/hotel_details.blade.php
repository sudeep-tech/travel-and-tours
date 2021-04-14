@extends('layouts.frontend_layout')
    @section('main-content')
    <div class="hero-wrap js-halfheight" style="background-image: url({{asset('frontend/images/tour10.jpg')}});">
    <div class="overlay"></div>
    <div class="container">

    <div class="row no-gutters slider-text js-halfheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
         	<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">&nbsp; </h1>
        	<!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>  -->
        </div>
    </div>
    </div>
</div>
		<section class="ftco-section">
        <!-- <img class="d-block w-100" src="{{asset('frontend/images/traveltour5.jpeg')}}" alt="First slide"> -->
     
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar order-md-last ftco-animate">
        		<div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Destination, City">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control" placeholder="Keyword search">
	                      <option value="">Select Location</option>
	                      <option value="">Kathmandu</option>
	                      <option value="">Pokhara</option>
	                      <option value="">Lumbini</option>
	                      <option value="">Muktinath</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkout_date" class="form-control checkout_date" placeholder="Date to">
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Star Rating</h3>
        			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
        		</div>
          </div><!-- END-->
          <div class="col-lg-9">
              <div class="row">
                
                <!-- <div class="row"> -->
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="hotel-img" style="background-image: url({{asset('uploads/images/hotel_details/'.@$hotel_details->image)}});"></div>
                            </div>
                            <!-- <div class="item">
                                <div class="hotel-img" style="background-image: url(images/hotel-3.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="hotel-img" style="background-image: url(images/hotel-4.jpg);"></div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <span>Aafnaideal Tour & Travels</span>
                        <h2>{{ucwords(@$hotel_details->property_name)}}</h2>
                        <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i>{{@$hotel_details->district_id}}</a></span>
                            <span class="star">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    8 Rating</span>
                                </p>
                             
                                <p>{!! @$hotel_details->overview !!}</p>
                             <p>  Floors  {!! @$hotel_details-> no_of_floors!!} </p>
                                
                                <div class="d-md-flex mt-5 mb-5">
                                   {!! @$hotel_details->description !!}
                                </div>
                                <!-- <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
                    </div>
                    <!-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Take A Tour</h4>
                        <div class="block-16">
                        <figure>
                            <img src="images/hotel-6.jpg" alt="Image placeholder" class="img-fluid">
                            <a href="" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                        </figure>
                        </div>
                    </div> -->
                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Our Rooms</h4>
                        <div class="row">
                    
                @if(isset($hotel_details->room[0]->id))
            
                  @foreach($hotel_details->room as $ind_room)
               
               <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                           <div class="destination">
                               <a href="{{route('room_by_detail',@$ind_room->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/images/room_details/'.@$ind_room->image)}});">
                                   <div class="icon d-flex justify-content-center align-items-center">
                                       <span class="icon-link"></span>
                                   </div>
                               </a>
                               <div class="text p-3">
                                   <div class="d-flex">
                                       <div class="container">
                                       <p class="bottom-area d-flex">
                                       <!-- <span><i class="icon-map-o"></i> San Franciso, CA</span>  -->
                                       <span class="ml-auto"><a href="{{route('room_by_detail',@$ind_room->slug)}}">Discover</a></span>
                                   </p>
                                   <h3><a href="{{route('room_by_detail',@$ind_room->slug)}}">{{ucwords(@$ind_room->property_name)}}</a></h3>
                                            <p>Room Type:{{ucwords(@$ind_room->room_type)}}</h5>
                                            <p>Room No.:{{ucwords(@$ind_room->room_no)}}</h5>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach
                   @endif
                   
               
         <div class="row">
             <div class="col text-center">
               <!-- @if(isset($hotel_details->rooms[0]->id))
                   {{@$hotel_details->room->links()}}
               @endif -->
             </div>
           </div>
</div>
                    </div>
              </div>
          </div>
        </div>
      </div>
		</section>                      
                    <div class="container hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-5">Check Availability &amp; Booking</h4>
                        <div class="fields">
                        <div class="widget-inner"><form class="edit-profile m-b30" method="post" @if(isset($hotelbookings)) action="{{route('update-hotelbooking',$hotelbookings->id)}}" @else action="{{route('post-hotelbooking')}}" @endif enctype="multipart/form-data">
						
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="ml-auto">
                                    <h3>Hotel Booking</h3>
                                    <li>
		                		<a href="{{route('hotelbookingadd')}}" class="ttr-material-button"><span class="ttr-label">Hotel Booking Add</span></a>
							</li>		
                                </div>
                            </div>
                            
                        </div>
                    </form>
                        </div>
                    </div>
                    
                    <div class="container hotel-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Related Hotels</h4>
                        <div class="row">
                            @if(isset($related_hotels[0]->id))
                            @foreach($related_hotels as $ind_detail)
                            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
								<div class="destination">
                                    <a href="{{route('hotel_by_detail',@$ind_detail->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/images/hotel_details/'.@$ind_detail->image)}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-link"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="container">
                                            <p class="bottom-area d-flex">
                                            <!-- <span><i class="icon-map-o"></i> San Franciso, CA</span>  -->
                                            <span class="ml-auto"><a href="{{route('hotel_by_detail',@$ind_detail->slug)}}">Discover</a></span>
                                        </p>
                                        <h3><a href="{{route('hotel_by_detail',@$ind_detail->slug)}}">{{ucwords(@$ind_detail->property_name)}}</a></h3>
                                                    <p>Address:{{ucwords(@$ind_detail->property_address)}}</h5>
                                                    <p>Phone number: {{ucwords(str_replace('_',' ',@$ind_detail->phone_num))}}</p>
                                            </div>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                                    
                        </div>
                    </div>

                <!-- </div> -->
              </div>

              <div class="container hotel-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Hotel Packages</h4>
                        <div class="row">
				  @if(isset($hotel_details->hotel_packages[0]->id))
					@foreach($hotel_details->hotel_packages as $ind_hotel_package)
					<div class="col-sm col-md-6 col-lg-4 ftco-animate">
								<div class="destination">
									<a href="{{route('hotelpackage_by_detail',@$ind_hotel_package->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/images/hotel_packages/'.@$ind_hotel_package->image)}});">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-link"></span>
										</div>
									</a>
									<div class="text p-3">
										<div class="d-flex">
											<div class="container">
                                            <p class="bottom-area d-flex">
												<span class="ml-auto"> <a href="{{route('hotelpackage_by_detail',@$ind_hotel_package->slug)}}">Discover</a></span>
                                            </p>
											
                                 <h3><a href="{{route('hotelpackage_by_detail',@$ind_hotel_package->slug)}}">{{ucwords(@$ind_hotel_package->package_title)}}</a></h3>   
                                        <p>Pickup Destination:{{ucwords(@$ind_hotel_package->pickup_destination)}}</p>
                                        <p>Breakfast:{{ucwords(@$ind_hotel_package->breakfast)}}</p>
                                        <p>Dinner: {{ucwords(str_replace('_',' ',@$ind_hotel_package->dinner))}}</p>
                                        <p>Price: {{ucwords(str_replace('_',' ',@$ind_hotel_package->price))}}</p>
											</div>
										</div>
									</div>
									
									</div>
								</div>
							</div>
						@endforeach
						@endif
		    			
          	</div>
    

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 @endsection   
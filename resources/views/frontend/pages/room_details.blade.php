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
                                <div class="hotel-img" style="background-image: url({{asset('uploads/images/room_details/'.@$room_details->image)}});"></div>
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
                        <h2>{{ucwords(@$room_details->property_name)}}</h2>
                        <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i>Floor{{@$room_details->Floor_level}}</a></span>
                            <span class="star">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    8 Rating</span>
                                </p>
                            
                                <p>Room number  {!! @$room_details->room_no!!}</p>
                                
              
                                <p> Free wifi   {!! @$room_details->free_wifi !!}</p>
                        
                                  <p> Attach Bathroom  {!! @$room_details->attach_bathroom!!}</p>
                           
                                  <p> Smoking policy {!! @$room_details->smoking_policy !!}</p>


                                  <p> Air condition   {!! @$room_details->aircondition !!}</p>


                                  <p> Balcony  {!! @$room_details->balcony!!}</p>



                                   <p> Tv   {!! @$room_details->Tv!!}</p>


                                  <p> Bed option   {!! @$room_details->bed_option !!}</p>


                                

                                 
                                </div>
                                <!-- <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
                    </div>
                   
                   
                                   
                   
                    <div class="container hotel-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Related Rooms</h4>
                        <div class="row">
                            @if(isset($related_rooms[0]->id))
                            @foreach($related_rooms as $ind_room)
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
                                        <h3><a href="{{route('room_by_detail',@$ind_room->slug)}}">{{ucwords(@$ind_room->room_type)}}</a></h3>
                                            <p>Room Type:{{ucwords(@$ind_room->property_name)}}</h5>
                                            <p>Room No.:{{ucwords(@$ind_room->room_no)}}</h5>
                                            </div>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
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
											<div class="one">
												<h3><a href="{{route('room_by_detail',@$ind_room->slug)}}">{{ucwords(@$ind_room->Title)}}</a></h3>
											
                                            </div>
                                           
                                            <p>Room No.:{{ucwords(@$ind_room->guide)}}</h5>          
											<div class="two">
												<span class="price" style="font-size:14px;">{{ucwords(str_replace('_',' ',@$ind_room->service_level))}}</span>
                                            </div>
                                            <div class="two">
												<span class="price" style="font-size:14px;">{{ucwords(str_replace('_',' ',@$ind_room->age_requirement))}}</span>
                                            </div>
                                            <div class="two">
												<span class="price" style="font-size:14px;">{{ucwords(str_replace('_',' ',@$ind_room->num_people))}}</span>
                                            </div>
                                            <div class="two">
												<span class="price" style="font-size:14px;">{{ucwords(str_replace('_',' ',@$ind_room->travel_period))}}</span>
											</div>
										</div>
										<p>{!!@$ind_room->description!!}</p>
										
										<hr>
										<p class="bottom-area d-flex">
											<!-- <span><i class="icon-map-o"></i> San Franciso, CA</span>  -->
											<span class="ml-auto"><a href="{{route('room_by_detail',@$ind_room->slug)}}">Discover</a></span>
										</p>
									</div>
								</div>
							</div>
						@endforeach
						@endif
		    			
		    		
          	<div class="row">
		          <div class="col text-center">
					@if(isset($hotel_details[0]->id))
						{{@$hotel_details->links()}}
					@endif
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
	<div class="container hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-5">Check Availability &amp; Booking</h4>
                        <div class="fields">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
									
                                    <input type="text" name="room_type" class="form-control" placeholder="room_type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name=contact_name class="form-control checkin_date" placeholder="Contact name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email_address" class="form-control checkin_date" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="arrival_time" class="form-control checkout_date" placeholder="Arrival TIme">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" name="mobile_phone" class="form-control checkout_date" placeholder="Mobile phone">
                                </div>
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
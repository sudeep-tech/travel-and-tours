<div class="hero-wrap js-fullheight" >
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('frontend/images/traveltour5.jpeg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('frontend/images/tour10.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('frontend/images/tour11.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <div class="overlay"></div>
      <div class="container">
       <!-- <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new Place</h1>
			<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>-->
		
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
    	<div class="container-wrap ml-auto">
    		<div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Flight</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Car Rent</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">From</label>
	              				<div class="form-field">
	              					<div class="icon"><span class="icon-my_location"></span></div>
					                <input type="text" class="form-control" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Travelers</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Guest</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>01</span> Travel</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>02</span> Experience</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>03</span> Relax</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
            <div class="container hotel-single ftco-animate mb-5 mt-5">
						<h4 class="mb-4"> Things to Look up in Nepal</h4>
						<div class="row">
						@if(isset($places[0]->id))
				        @foreach($places as $ind_detail)
				  
				  <div class="col-sm col-md-6 col-lg-4 ftco-animate">
							  <div class="destination">
								  <a href="{{route('place_by_detail',@$ind_detail->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/images/place_details/'.@$ind_detail->image)}});">
									  <div class="icon d-flex justify-content-center align-items-center">
										  <span class="icon-link"></span>
									  </div>
								  </a>
								  <div class="text p-3">
									  <div class="d-flex">
										  <div class="one">
											  <h3><a href="{{route('place_by_detail',@$ind_detail->slug)}}">{{ucwords(@$ind_detail->Title)}}</a></h3>
											  <!-- <p class="rate">
												  <i class="icon-star"></i>
												  <i class="icon-star"></i>
												  <i class="icon-star"></i>
												  <i class="icon-star"></i>
												  <i class="icon-star-o"></i>
												  <span>8 Rating</span>
											  </p> -->
										  </div>
										  <div class="two">
											  <span class="price" style="font-size:14px;">{{ucwords(str_replace('_',' ',@$ind_detail->travel_type))}}</span>
										  </div>
									  </div>
									  <p>{!!@$ind_detail->overview!!}</p>
									  <p class="days"><span>{{@$ind_detail->district->district_name}}</span></p>
									  <hr>
									  <p class="bottom-area d-flex">
										  <!-- <span><i class="icon-map-o"></i> San Franciso, CA</span>  -->
										  <span class="ml-auto"><a href="{{route('place_by_detail',@$ind_detail->slug)}}">Discover</a></span>
									  </p>
								  </div>
							  </div>
						  </div>
					  @endforeach
				  </div>
					  @endif
					  
				  
			
		</div>
                        </div>
        
		</div>
		</div>
	</section>
   
		
		<section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image:url({{asset('frontend/images/tour7.jpg')}});"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">The Best Travel Agency</h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-yatch"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Competitive Pricing</h3>
                <p>With 500+ suppliers and the purchasing power of 400 million members, Trip.com can save you more!</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-around"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Award-Winning Service</h3>
                <p>Travel worry-free knowing that we're here if you need us, 24 hours a day</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-compass"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Worldwide Coverage</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3"></h3>
                <p>Over 1,400,000 hotels in more than 200 countries and regions & flights to over 5,000 cities</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section">
  
	<div class="container hotel-single ftco-animate mb-5 mt-5">
	<div class="block-18 text-center">
     <h4 class="mb-4"> RECOMENDED  PACKAGES AND ACTIVITIES</h4>
      <div class="row">
                            @if(isset($tour_package[0]->id))
                            @foreach($tour_package as $ind_detail)
                            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
								<div class="destination">
                                    <a href="{{route('tourpackages_by_detail',@$ind_detail->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/images/tour_packages/'.@$ind_detail->image)}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-link"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="container">
                                            <p class="bottom-area d-flex">
                                            <!-- <span><i class="icon-map-o"></i> San Franciso, CA</span>  -->
                                            <span class="ml-auto"><a href="{{route('tourpackages_by_detail',@$ind_detail->slug)}}">Discover</a></span>
                                        </p>
									    <h3><a href="{{route('tourpackages_by_detail',@$ind_detail->slug)}}">{{ucwords(@$ind_detail->Title)}}</a></h3>
												<h5 class="heading mt-4" style="color:orangered;">  ${{ucwords(@$ind_detail->price)}}</h5>
				                                 <p>Service Level : {{ucwords(str_replace('_',' ',@$ind_detail->service_level))}}</p>
				                                 <p>Required Age: {{ucwords(str_replace('_',' ',@$ind_detail->age_requirement))}}</p>
				                                  <p>Service Level:Num of people{{ucwords(str_replace('_',' ',@$ind_detail->num_people))}}</p>
										
                                           </div>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        </div>

    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('frontend/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="40000">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="87000">0</strong>
		                <span>Hotels</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="56400">0</strong>
		                <span>Restaurant</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


  
            <div class="container hotel-single ftco-animate mb-5 mt-5">
			<div class="block-18 text-center">
                        <h4 class="mb-4"> RECOMENDED HOTELS AND RESTURANT  </h4>
                        <div class="row">
                            @if(isset($hotel_details[0]->id))
                            @foreach($hotel_details as $ind_detail)
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
			
    	
    	<div class="container-fluid">
    		<div class="row">
    			
			@if(isset($tourpackage[0]->id))
				 
				 @foreach($tourpackage as $ind_detail)
				 
				 <div class="col-sm col-md-6 col-lg-4 ftco-animate">
							 <div class="destination">
								 <a href="{{route('tourpackages_by_detail',@$ind_detail->slug)}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/images/hotel_details/'.@$ind_detail->image)}});">
									 <div class="icon d-flex justify-content-center align-items-center">
										 <span class="icon-link"></span>
									 </div>
								 </a>
								 <div class="text p-3">
									 <div class="d-flex">
										 <div class="container">
										 <p class="bottom-area d-flex">
										 <!-- <span><i class="icon-map-o"></i> San Franciso, CA</span>  -->
										 <span class="ml-auto"><a href="{{route('tourpackages_by_detail',@$ind_detail->slug)}}">Discover</a></span>
									 </p>
									 <h3><a href="{{route('tourpackages_by_detail',@$ind_detail->slug)}}">{{ucwords(@$ind_detail->Title)}}</a></h3>
												<h5 class="heading mt-4" style="color:orangered;">{{ucwords(@$ind_detail->price)}}</h5>
				                                 <p>Service Level : {{ucwords(str_replace('_',' ',@$ind_detail->service_level))}}</p>
				                                 <p>Required Age: {{ucwords(str_replace('_',' ',@$ind_detail->age_requirement))}}</p>
				                                  <p>Service Level:Num of people{{ucwords(str_replace('_',' ',@$ind_detail->num_people))}}</p>
											 
										 </div>
										 
										 
									 
									 </div>
									 <p>{!!@$ind_detail->overview!!}</p>
									 <p class="days"><span>{{@$ind_detail->user_id}}</span></p>
									 <hr>
									 
								 </div>
							 </div>
						 </div>
					 @endforeach
					 @endif
					 
				 
			</div>
		</div>
		  </div>
				</div>
		</div>
	
    				
    		</div>
    	</div>
    </section>

  
	
	
	<		<br><br/>
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

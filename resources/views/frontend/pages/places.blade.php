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
				  @if(isset($details[0]->id))
				  
					@foreach($details as $ind_detail)
					
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
						@endif
		    			
		    		
          	<div class="row">
		          <div class="col text-center">
					@if(isset($details[0]->id))
						{{@$details->links()}}
					@endif
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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
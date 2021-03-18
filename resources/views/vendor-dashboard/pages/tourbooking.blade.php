@extends('layouts.vendor-layout')
@section('main-content')

        
              <div class="db-breadcrumb">
				   <h4 class="breadcrumb-title">Bookings</h4>
				    <ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
				
					<li>Rooms</li>
				</ul>
			</div>
			@if(isset($tourbookings))
			   <div class="row">
		  <div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>View Booking</h4>
						</div>
							@foreach($tourbookings as $ind_tour_bookings)
							<div class="widget-inner">
							<div class="card-courses-list admin-courses">
							<div class="card-courses-media">
							
							</div>
							<div class="card-courses-full-dec">
					          <div class="card-courses-title">
							  <h6 class="m-b5">Booked By: {{(@$ind_tour_bookings->user->name)}}</h6>
							  </div>

						      <div class="card-courses-list-bx">
								 <ul class="card-courses-view">
						
							<li>	
							<h6 class="m-b5">travel packages: {{(@$ind_tour_bookings->travelpackages->Title)}}</h6>
							</li>
						
								<h6 class="m-b5">name: {{@$ind_tour_bookings->name}}</h6>
							</li>
							<li>
						
								<h6 class="m-b5">age requirement: {{@$ind_tour_bookings->age_requirement}}</h6>
							</li>

							<li>
								<h6 class="m-b5">num people: {{@$ind_tour_bookings->num_people}}</h6>
							</li>
							<li>
								<h6 class="m-b5">email: {{@$ind_tour_bookings->email}}</h6>
							</li>
							<li>
								<h6 class="m-b5">travel period: {{@$ind_tour_bookings->travel_period}}</h6>
							</li>
							<li>
								<h6 class="m-b5">travel style: {{@$ind_tour_bookings->travel_style}}</h6>
							</li>
							<li>
								<h6 class="m-b5">guide: {{@$ind_tour_bookings->guide}}</h6>
							</li>
							<li>
								<h6 class="m-b5">price: {{@$ind_tour_bookings->price}}</h6>
							</li>
						
						</ul>
						</div>
						<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10">Tour Description</h6>
							<p>{!! @$ind_tour_bookings->description !!}</p>	
						</div>
						
						<div class="col-md-12">
							<a href="{{route('edit-tourbooking',@$ind_tour_bookings->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-tourbooking',@$ind_tour_bookings->id)}}" class="btn red outline radius-xl ">Delete</a>
							</div>
						</div>
							</div>
							</div>
					</div>
			@endforeach
					
				
			 </div>
		   </div>
	
	
			
	
</div>

@endif

@endsection



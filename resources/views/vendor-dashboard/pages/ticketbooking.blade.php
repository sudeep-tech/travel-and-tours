@extends('layouts.vendor-layout')
@section('main-content')

	

	                
                <div class="db-breadcrumb">
				     <h4 class="breadcrumb-title">Ticket Booking</h4>
				      <ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
				
					  <li>Rooms</li>
				</ul>
			</div>
					@if(isset($ticketbookings))
					<div class="row">
	         <div class="col-lg-12 m-b30">
			    <div class="widget-box">
				<div class="wc-title">
					<h4>View Booking</h4>
				</div>
					@foreach($ticketbookings as $ind_ticket_bookings)
					<div class="widget-inner">
							<div class="card-courses-list admin-courses">
							<div class="card-courses-media">
							
							</div>
							<div class="card-courses-full-dec">
					          <div class="card-courses-title">
							  <h6 class="m-b5">Booked By: {{(@$ind_ticket_bookings->user->name)}}</h6>
							  </div>

						      <div class="card-courses-list-bx">
								 <ul class="card-courses-view">

																

									<li>
										<h6 class="m-b5">currrent_address: {{@$ind_ticket_bookings->current_address}}</h6>
									</li>
									
									
									<li>
										<h6 class="m-b5">country: {{@$ind_ticket_bookings->country}}</h6>
									</li>
									
									
									<li>
										<h6 class="m-b5">leaving from: {{@$ind_ticket_bookings->leaving_from}}</h6>
									</li>
									
									
								
									
									
									<li>
										<h6 class="m-b5">mobile no: {{@$ind_ticket_bookings->mobile_no}}</h6>
									</li>
									
									<li>
										<h6 class="m-b5">from: {{@$ind_ticket_bookings->from}}</h6>
									</li>
									
									
									<li>
										<h6 class="m-b5">where: {{@$ind_ticket_bookings->where}}</h6>
									</li>

										
									<li>
										<h6 class="m-b5">checkin_date: {{@$ind_ticket_bookings->checkin_date}}</h6>
									</li>
										
									<li>
										<h6 class="m-b5">checkout_date: {{@$ind_ticket_bookings->checkout_date}}</h6>
									</li>
										
									<li>
										<h6 class="m-b5">airport_pickup: {{@$ind_ticket_bookings->airport_pickup}}</h6>
									</li>
										
									<li>
										<h6 class="m-b5">airlines_name: {{@$ind_ticket_bookings->airlines_name}}</h6>
									</li>
										
									<li>
										<h6 class="m-b5">flight_num: {{@$ind_ticket_bookings->flight_num}}</h6>
									</li>
									
										
									<li>
										<h6 class="m-b5">flight_time: {{@$ind_ticket_bookings->flight_time}}</h6>
									</li>
										
									<li>
										<h6 class="m-b5">adult: {{@$ind_ticket_bookings->adult}}</h6>
									</li>
										
									<li>
										<h6 class="m-b5">child: {{@$ind_ticket_bookings->child}}</h6>
									</li>
							
							
						</ul>
					</div>
										
				      
						<div class="col-md-12">
							<a href="{{route('edit-ticketbooking',@$ind_ticket_bookings->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-ticketbooking',@$ind_ticket_bookings->id)}}" class="btn red outline radius-xl ">Delete</a>
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


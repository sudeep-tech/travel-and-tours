@extends('layouts.vendor-layout')
@section('main-content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title">Hotel Booking Details</h4>
	<ul class="db-breadcrumb-list">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		<li>Hotel Booking</li>
	</ul>
</div>	

            @if(isset($hotelbookings))
			<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
							<h4>View Booking</h4>
                   </div>
	     	          @foreach($hotelbookings as $ind_hotel_bookings)
		            <div class="widget-inner">
		     	    <div class="card-courses-list admin-courses">
				   <div class="card-courses-media">
					<img src="{{asset('uploads/images/hotel_details/'.@$ind_hotel_bookings->hotel_details->image)}}">
				   </div>
				    <div class="card-courses-full-dec">
					<div class="card-courses-title">
						
						<h6 class =m-b5>Property Name: {{$ind_hotel_bookings->hotel_details->property_name}}</h6>
					</div>

					<div class="card-courses-list-bx">
						<ul class="card-courses-view">
							@if(isset($ind_hotel_bookings->user_id))
							<li>
								<h6 class="m-b5"> Booked By: {{(@$ind_hotel_bookings->user->name)}}</h6>
							</li>
							@endif
							<li>
								<h6 class="m-b5"> Address : {{@$ind_hotel_bookings->property_address}}</h6>
							</li>
							<li>
								<h6 class="m-b5">Room type: {{@$ind_hotel_bookings->room_type}}</h6>
							</li>

							<li>
								<h6 class="m-b5">Contact Name: {{@$ind_hotel_bookings->contact_name}}</h6>
							</li>
							<li>
								<h6 class="m-b5">Mobile no: {{@$ind_hotel_bookings->mobile_phone}}</h6>
							</li>
							<li>
								<h6 class="m-b5">Email address: {{@$ind_hotel_bookings->email_address}}</h6>
							</li>
							<li>
								<h6 class="m-b5"> Input price from list : {{@$ind_hotel_bookings->price}}</h6>
							</li>
							<li>
								<h6 class="m-b5"> arrival date: {{@$ind_hotel_bookings->arrival_date}}</h6>
							</li>
							<li>
								<h6 class="m-b5"> arrival time: {{@$ind_hotel_bookings->arrival_time}}</h6>
							</li>
						</ul>
					</div>
					<div class="row card-courses-dec">
					<div class="col-md-12">
						
						
						</div>
						
					
						<div class="col-md-12">
							<a href="{{route('edit-hotelbooking',@$ind_hotel_bookings->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-hotelbooking',@$ind_hotel_bookings->id)}}" class="btn red outline radius-xl ">Delete</a>
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




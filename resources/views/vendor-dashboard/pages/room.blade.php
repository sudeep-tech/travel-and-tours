@extends('layouts.vendor-layout')
@section('main-content')

			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Rooms</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
					<li>Rooms</li>
				</ul>
			</div>	

			@if(isset($room_details))
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>View Room</h4>
						</div>
						
						@foreach($room_details as $ind_room_detail)
			           <div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">

								<img src="{{asset('uploads/images/room_details/'.@$ind_room_detail->image)}}" alt=""/>
					
							</div>
				           <div class="card-courses-full-dec">
					          <div class="card-courses-title">
							  <h6 class="m-b5">room no: {{(@$ind_room_detail->room_no)}}</h6>
							  </div>
							  
							 <div class="card-courses-list-bx">
								<ul class="card-courses-view">
				            <li>	
							   <h6 class="m-b5">property name: {{(@$ind_room_detail->hotel_details->property_name)}}</h6>
							</li>
						

							<li>
								<h6 class="m-b5">room_type: {{@$ind_room_detail->room_type}}</h6>
							</li>

						
							<li>
								<h6 class="m-b5">bed_option: {{@$ind_room_detail->bed_option}}</h6>
							</li>
							<li>
								<h6 class="m-b5">attach_bathroom: {{@$ind_room_detail->attach_bathroom}}</h6>
							</li>
							<li>
								<h6 class="m-b5">aircondition: {{@$ind_room_detail->aircondition}}</h6>
							</li>
							<li>
								<h6 class="m-b5">balcony: {{@$ind_room_detail->balcony}}</h6>
							</li>
							<li>
								<h6 class="m-b5">room_no: {{@$ind_room_detail->room_no}}</h6>
							</li>
							<li>
								<h6 class="m-b5">smoking_policy: {{@$ind_room_detail->smoking_policy}}</h6>

							</li>
							<li>
								<h6 class="m-b5">Floor_level:{{@$ind_room_detail->Floor_level}}</h6>
							</li>
						</ul>
						</div>
						<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10">Room Description</h6>
							<p>{!! @$ind_room_detail->description !!}</p>	
						</div>
						<div class="col-md-12">
							<a href="{{route('edit-room',@$ind_room_detail->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-room',@$ind_room_detail->id)}}" class="btn red outline radius-xl ">Delete</a>
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
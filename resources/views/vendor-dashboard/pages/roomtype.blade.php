@extends('layouts.vendor-layout')
@section('main-content')

			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Room Type </h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
					<li>Rooms Type</li>
				</ul>
			</div>	

			@if(isset($roomTypes))
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>View Room</h4>
						</div>
						
						@foreach($roomTypes as $ind_room_type)
			           <div class="widget-inner">
							<div class="card-courses-list admin-courses">
								<!-- <div class="card-courses-media">

								<img src="{{asset('uploads/images/room_details/'.@$ind_room_type->image)}}" alt=""/>
					
							</div> -->
				           					         							  
							 <div class="card-courses-list-bx">
								<ul class="card-courses-view">
								<li>
									<h6 class="m-b5">Property Name: {{@$ind_room_type->hotel_details->property_name}}</h6>
								</li>
								<li>
									<h6 class="m-b5">Room Type: {{@$ind_room_type->room_type}}</h6>
								</li>
				            <li>	
							   <h6 class="m-b5">Room price: {{(@$ind_room_type->room_price)}}</h6>
							</li>
						
							

						
						
						</ul>
						</div>
						<div class="row card-courses-dec">
						
						<div class="col-md-12">
							<a href="{{route('edit-room-type',@$ind_room_type->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-room-type',@$ind_room_type->id)}}" class="btn red outline radius-xl ">Delete</a>
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
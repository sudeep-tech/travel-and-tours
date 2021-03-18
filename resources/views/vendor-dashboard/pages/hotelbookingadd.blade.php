<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')


			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($hotelbookings))Edit Hotel Booking Details @else Add Tour Bookings @endif @endif <h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
					
					<h4>@if(isset($hotelbookings))Edit Hotel Booking Details @else Add Hotel Booking Details @endif</h4>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
						@if(isset($_title)) {{$_title}} @else @if(isset($hotelbookings))Edit Hotel Booking Details @else Add Hotel Bookings @endif @endif
							
						</div>
						<div class="widget-inner"><form class="edit-profile m-b30" method="post" @if(isset($hotelbookings)) action="{{route('update-hotelbooking',$hotelbookings->id)}}" @else action="{{route('post-hotelbooking')}}" @endif enctype="multipart/form-data">
						
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Hotel Booking</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Choose Hotel</label>
										<div>
										<select name="hotel_details_id" class="form-control">
											@if(isset($hotel_details))
											@foreach($hotel_details as $ind_hotel_details)
											<option value="{{@$ind_hotel_details->id}}">{{@$ind_hotel_details->property_name}}</option>
											@endforeach
											@endif
										</select>
										</div>			
									</div>


								  <div class="form-group col-6">
								      <label class="col-form-label">Client(only set if client is registered)</label>
								    <div>
									<select name="user_id" class="form-control">
										@if(isset($users))
										@foreach($users as $ind_user)
										<option value="{{@$ind_user->id}}">{{@$ind_user->name}}</option>
										@endforeach
										@endif
									</select>
									
								</div>	
							</div>	
									
                                        <div class="form-group col-6">
										<label class="col-form-label">Room type</label>
										<div>
										<select name="room_type" class="form-control">
											<option value="single"@isset($hotelbookings->room_type)@if($hotelbookings->room_type=='single') selected @endif @endisset->Single</option>
											<option value="double"@isset($hotelbookings->room_type)@if($hotelbookings->room_type=='double') selected @endif @endisset->Double</option>
											<option value="triple"@isset($hotelbookings->room_type)@if($hotelbookings->room_type=='triple') selected @endif @endisset->Triple</option>
										</select>
										</div>
									</div>

									<div class="form-group col-6">
									<label class="col-form-label">Contact name</label>
										<div>
											<input class="form-control" name="contact_name" type="text" value="{{isset($hotelbookings->contact_name)?$hotelbookings->contact_name:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>

										<div class="form-group col-6">
									<label class="col-form-label">Mobile phone no</label>
										<div>
											<input class="form-control" name="mobile_phone" type="number" value="{{isset($hotelbookings->mobile_phone)?$hotelbookings->mobile_phone:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>	

										
                                        
                                    
										<div class="form-group col-6">
									<label class="col-form-label">Email address</label>
										<div>
											<input class="form-control" name="email_address" type="text" value="{{isset($hotelbookings->email_address)?$hotelbookings->email_address:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div>
                                        
										<div class="form-group col-6">
									<label class="col-form-label"> address</label>
										<div>
											<input class="form-control" name="property_address" type="text" value="{{isset($hotelbookings->property_address)?$hotelbookings->property_address:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div>
                                        
										
                                        <div class="form-group col-6">
									<label class="col-form-label">Price</label>
										<div>
											<input class="form-control" name="price" type="number" value="{{isset($hotelbookings->price)?$hotelbookings->price:''}}">
										</div>
</div>
										
<div class="form-group col-6">
		<label class="col-form-label">Arrival time</label>
	<div> 
		<input class="form-control" name="arrival_time" type="time" value="{{isset($hotelbookings->arrival_time)?$hotelbookings->arrival_time:''}}">
		<!-- <input class="form-control" type="text" value=""> -->
	</div>
</div>
<div class="form-group col-6">
	<label class="col-form-label">Arrival Date</label>
	<div> 
		<input class="form-control" name="arrival_date" type="date" value="{{isset($hotelbookings->arrival_date)?$hotelbookings->arrival_date:''}}">
		<!-- <input class="form-control" type="text" value=""> -->
	</div>					
</div>
<div class="seperator"></div>
					
<div class="col-12">
		<button type="reset" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-trash"></i>Delete</button>
		<button type="submit" class="btn">Save</button>
</div>


</form>
</div>
</div>
				
				<!-- Your Profile Views Chart END-->
			</div>
	
@endsection
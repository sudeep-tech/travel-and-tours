<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')
    <div class ="container-fluid">
	<div class="db-breadcrumb">
		<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($tourbookings))Edit Tour Booking Details @else Add Tour Bookings @endif @endif <h4>
		<ul class="db-breadcrumb-list">
			<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		
			<li>@if(isset($tourbookings))Edit Tour Booking Details @else Add Tour Booking Details @endif</li>
		</ul>
	</div>

	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-12 m-b30">
			<div class="widget-box">
				<div class="wc-title">
			<h4>	@if(isset($_title)){{$_title}} @else @if(isset($tourbookings))Edit Tour Booking Details @else Add Tour Bookings @endif @endif </h4>
				</div>
				<div class="widget-inner">
					<form class="edit-profile m-b30" method="post" @if(isset($tourbookings)) action="{{route('update-tourbooking',$tourbookings->id)}}" @else action="{{route('post-tourbooking')}}" @endif enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-12">
								<div class="ml-auto">
									<h3>Tour  Booking</h3>
								</div>
							</div>
								
						

							<div class="form-group col-6">
								<label class="col-form-label">Name</label>
								<div>
									<input class="form-control" name="name" type="text" value="{{isset($tourbookings->name)?$tourbookings->name:''}}">
								</div>
									
							</div>	
							
							<div class="form-group col-6">
								<label class="col-form-label">Tour Package</label>
								<div>
									<select name="travel_package_id" class="form-control">
										@if(isset($travelpackages))
										@foreach($travelpackages as $ind_travel_package)
										<option value="{{@$ind_travel_package->id}}">{{@$ind_travel_package->Title}}</option>
										@endforeach
										@endif
									</select>
									
								</div>	
							</div>	
							<div class="form-group col-6">
								<label class="col-form-label">Client</label>
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
								<label class="col-form-label">Age requirement</label>
								<div>
									<input class="form-control" name="age_requirement" type="number" value="{{isset($tourbookings->age_requirement)?$tourbookings->age_requirement:''}}">
								</div>	
							</div>	
		
							<div class="form-group col-6">
								<label class="col-form-label">num_people</label>
								<div>
									<input class="form-control" name="num_people" type="number" value="{{isset($tourbookings->num_people)?$tourbookings->num_people:''}}">
								</div>
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Email</label>
								<div>
									<input class="form-control" name="email" type="email" value="{{isset($tourbookings->email)?$tourbookings->email:''}}">
								</div>
							</div>
								
							<div class="form-group col-6">
								<label class="col-form-label">Travel period</label>
								<div>
									<input class="form-control" name="travel_period" type="number" value="{{isset($tourbookings->travel_period)?$tourbookings->travel_period:''}}">
								</div>
							</div>
								
							<div class="form-group col-6">
								<label class="col-form-label">Travel style</label>
								<div>
									<input class="form-control" name="travel_style" type="text" value="{{isset($tourbookings->travel_style)?$tourbookings->travel_style:''}}">
								</div>
									
							</div>
							<div class="form-group col-6">
								<label class="col-form-label">Guide</label>
								<div>
									<input class="form-control" name="guide" type="text" value="{{isset($tourbookings->guide)?$tourbookings->guide:''}}">
								</div>
								</div>
							<div class="form-group col-6">
								<label class="col-form-label">Price</label>
								<div>
									<input class="form-control" name="price" type="text" value="{{isset($tourbookings->price)?$tourbookings->price:''}}">
								</div>
									
							</div>
						
							
						<div class="seperator"></div>
						
						<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									
									<div class="form-group col-12">
										<label class="col-form-label"> ABOUT THe Tour Booking</label>
										<div>
                                            <textarea rows="10" name="description" class="form-control">{!! @$tourbookings->description !!}</textarea>
										</div>
						
						
							<div class="col-12">
							<button type="button" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-trash"></i>Delete</button>
							<button type="submit" class="btn">Save</button>
							</div>

				</form>

			</div>
		</div>

	</div>		
	

@endsection
<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')

         <div class="db-breadcrumb">
		   <h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($packages))  Edit Package  Details @else  Add Package @endif @endif <h4>
		   <ul class="db-breadcrumb-list">
			<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		
			<li>@if(isset($packages))Edit Package Details @else Add  Package Details @endif</li>
		  </ul>
	</div>		
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
						<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($packages))Package  Details @else Package @endif @endif <h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" @if(isset($packages)) action="{{route('update-package',$packages->id)}}" @else action="{{route('post-package')}}" @endif enctype="multipart/form-data">
							@csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3> Hotel and Resto Package details </h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Choose Property</label>
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
										<label class="col-form-label">Package Title</label>
										<div>
											<input class="form-control" name="package_title" type="text" value="{{isset($packages->package_title)?$packages->package_title:''}}">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Vehicle service</label>
										<div>
											<input class="form-control" name="car_service" type="text" value="{{isset($packages->car_service)?$packages->car_service:''}}">
										</div>
									</div>
									<div class="form-group col-6">
									<label class="col-form-label">Pick up Time</label>
										<div>
											<input class="form-control" name="pickup_time" type="time" value="{{isset($packages->pickup_time)?$packages->pickup_time:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>
										<div class="form-group col-6">
										<label class="col-form-label">Pick up Destination</label>
										<div>
											<input class="form-control" name="pickup_destination" type="text" value="{{isset($packages->pickup_destination)?$packages->pickup_destination:''}}">
										</div>
										</div>
									
										<div class="form-group col-6">
										<label class="col-form-label">No of People</label>
										<div>
											<input class="form-control" name="no_people" type="number" value="{{isset($packages->no_people)?$packages->no_people:''}}">
										</div>
										</div>

										
										
										<div class="form-group col-6">
										<label class="col-form-label">Visit Localplace</label>
										<div>
											<input class="form-control" name="visit_localplace" type="text" value="{{isset($packages->visit_localplace)?$packages->visit_localplace:''}}">
										</div>
										</div>
										<div class="form-group col-6">
											<label class="col-form-label">Image</label>
											<div>
												<input class="form-control" name="image" type="file" accept="image/*">
											</div>
										</div>
									
										<div class="col-12">
											<div class="ml-auto">
												<h3>Meals </h3>
											</div>
										</div>
										<div class="form-group col-6">
											<label class="col-form-label">Breakfast</label>
											<div>
												<input class="form-control" name="breakfast" type="text" value="{{isset($packages->breakfast)?$packages->breakfast:''}}">
											</div>
										</div>
										<div class="form-group col-6">
											<label class="col-form-label">Dinner</label>
											<div>
												<input class="form-control" name="dinner" type="text" value="{{isset($packages->dinner)?$packages->dinner:''}}">
											</div>
										</div>
										<div class="form-group col-6">
											<label class="col-form-label">Lunch</label>
											<div>
												<input class="form-control" name="lunch" type="text" value="{{isset($packages->lunch)?$packages->lunch:''}}">
											</div>
										</div>
										
									</div>

									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">About The Package Service</label>
										<div>
											<textarea name="description" class="form-control">{!! @$packages->description !!} </textarea>
										</div>
									</div>
									
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
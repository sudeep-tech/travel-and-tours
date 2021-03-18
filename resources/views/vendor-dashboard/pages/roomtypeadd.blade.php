<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')

           <div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($roomTypes))  Edit Room  Type @else  Add Room Type @endif @endif <h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>
					
					<li>@if(isset($roomTypes))Edit Room Type @else Add  Room Type @endif</li>
				</ul>
			</div>

			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
				 	<h4>	@if(isset($_title)) {{$_title}} @else @if(isset($roomTypes))  Edit Room  Type @else  Add Room Type @endif @endif </h4>
							
						</div>
						<div class="widget-inner">
						<form class="edit-profile m-b30" method="post" @if(isset($roomTypes)) action="{{route('update-room-type',$roomTypes->id)}}" @else action="{{route('post-room-type')}}" @endif enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Room Type </h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Choose Property</label>
										<div>
										<select name="hotel_details_id" class="form-control">
											@if(isset($hotel_details))
											@foreach($hotel_details as $ind_hotel_details)
											<option value="{{@$ind_hotel_details->id}}" @if($roomTypes->hotel_details_id==$ind_hotel_details->id) selected @endif >{{@$ind_hotel_details->property_name}}</option>
											@endforeach
											@endif
										</select>
										</div>				
									</div>
									<div class="form-group col-6">
									<label class="col-form-label">Room type</label>
										<div>
											<input class="form-control" name="room_type" type="text" value="{{isset($roomTypes->room_type)?$roomTypes->room_type:''}}">
										</div>
										</div>

									
									<div class="form-group col-6">
									<label class="col-form-label">Price</label>
										<div>
											<input class="form-control" name="room_price" type="number" value="{{isset($roomTypes->room_price)?$roomTypes->room_price:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>
									
									<div class="seperator"></div>
									
									<div class="col-12">
									<button type="submit" class="btn">Save changes</button>
										<button type="button" class="btn-danger add-item m-r5"><i class="fa fa-fw fa-trash"></i>Clear</button>
                                        
									</div>
								
								
							</form>
					
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
		
		   
			
@endsection
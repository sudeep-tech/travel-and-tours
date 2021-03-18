<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')

           <div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($room_details))  Edit Room  Details @else  Add Room @endif @endif <h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>
					
					<li>@if(isset($room_details))Edit Room Details @else Add  Room Details @endif</li>
				</ul>
			</div>

			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
				 	<h4>	@if(isset($_title)) {{$_title}} @else @if(isset($room_details))  Edit Room  Details @else  Add Room @endif @endif </h4>
							
						</div>
						<div class="widget-inner">
						<form class="edit-profile m-b30" method="post" @if(isset($room_details)) action="{{route('update-room',$room_details->id)}}" @else action="{{route('post-room')}}" @endif enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Room details </h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Choose Property</label>
										<div>
										<select name="hotel_details_id" id="hotel_detail_select" class="form-control">
											@if(isset($hotel_details))
											@foreach($hotel_details as $ind_hotel_details)
											<option value="{{@$ind_hotel_details->id}}" @if(@$room_details->hotel_details_id==$ind_hotel_details->id) selected @endif>{{@$ind_hotel_details->property_name}}</option>
											@endforeach
											@endif
										</select>
										</div>				
									</div>
									
									<div class="form-group col-6">
									<label class="col-form-label">Room type</label>
										<div>
										<select name="room_type" id="room_type_select" class="form-control">
											@if(isset($room_types))
											@foreach($room_types as $ind_room_types)
											<option value="{{@$ind_room_types->id}}" @if(@$room_details->room_type==$ind_room_types->id) selected @endif >{{@$ind_room_types->room_type}}</option>
											@endforeach
											@endif
										</select>
											<!-- <input class="form-control" name="room_type" type="text" value="{{isset($room_details->room_types->room_type)?$room_details->room_types->room_type:''}}"> -->
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>
										<div class="form-group col-6">
											<label class="col-form-label">Room No</label>
											<div>
												<input class="form-control" name="room_no" type="number" value="{{isset($room_details->room_no)?$room_details->room_no:''}}">
											</div>
										</div>
										<div class="form-group col-6">
									<label class="col-form-label">Room service</label>
										<div>
											<input class="form-control" name="room_service" type="text" value="{{isset($room_details->room_service)?$room_details->room_service:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>	

											

										<div class="form-group col-6">
										<label class="col-form-label">Floor level</label>
										<div>
										<select name="Floor_level" class="form-control">
										
											
											<option value="second"@isset($room_details->Floor_level)@if($room_details->Floor_level=='second') selected @endif @endisset>Second</option>
											<option value="third"@isset($room_details->Floor_level)@if($room_details->Floor_level=='third') selected @endif @endisset>Third</option>
											<option value="fourth"@isset($room_details->Floor_level)@if($room_details->Floor_level=='fourth') selected @endif @endisset>Fourth</option>
											<option value="fifth"@isset($room_details->Floor_level)@if($room_details->Floor_level=='fifth') selected @endif @endisset>Fifth</option>
											<option value="sixth"@isset($room_details->Floor_level)@if($room_details->Floor_level=='sixth') selected @endif @endisset>Sixth</option>
											<option value="seventh"@isset($room_details->Floor_level)@if($room_details->Floor_level=='seventh') selected @endif @endisset>Seventh</option>
											

										
										</select>
										</div>
										</div>

									
										<div class="form-group col-6">
											<label class="col-form-label">Image</label>
											<div>
												<input class="form-control" name="image" type="file" accept="image/*">
											</div>
										</div>
										</div>

										<div class="form-group col-6">
										<label class="col-form-label">Aircondition</label>
										<div>
										<select name="aircondition" class="form-control">
										
											<option value="yes" @isset($room_details->aircondition)@if(@$room_details->aircondition=='yes') selected @endif @endisset->Yes</option>
											<option value="no"@isset($room_details->aircondition) @if(@$room_details->aircondition=='no') selected @endif @endisset->No</option>
										</select>
										</div>
										</div>

									<div class="form-group col-6">
										<label class="col-form-label">Free Wifi</label>
										<div>
										<select name="free_wifi"class="form-control">
											
											<option value="yes" @isset($room_details->free_wifi)@if(@$room_details->free_wifi=='yes') selected @endif @endisset->Yes</option>
											<option value="no" @isset($room_details->free_wifi)@if(@$room_details->free_wifi=='no') selected @endif @endisset->NO</option>
										</select>
										</div>
										</div>
									<div class="form-group col-6">
										<label class="col-form-label">Smoking Policy</label>
										<div>
										<select name="smoking_policy" class="form-control">
											<option value="yes"@isset($room_details->smoking_policy)@if($room_details->smoking_policy=='yes') selected @endif @endisset->Yes</option>
											<option value="no"@isset($room_details->smoking_policy)@if($room_details->smoking_policy=='no') selected @endif @endisset->NO</option>
										
										</select>
										</div>
										</div>


										<div class="form-group col-6">
										<label class="col-form-label">Tv</label>
										<div>
										<select name="Tv" class="form-control">
											<option value="yes"@isset($room_details->Tv)@if($room_details->free_wifi=='yes') selected @endif @endisset->Yes</option>
											<option value="no"@isset($room_details->Tv)@if($room_details->free_wifi=='no') selected @endif @endisset->No</option>
										</select>
										</div>
										</div>
										
										<div class="form-group col-6">
										<label class="col-form-label">Bed option</label>
										<div>
										<select name="bed_option" class="form-control">
											
											<option value="single"@isset($room_details->bed_option)@if($room_details->bed_option=='single') selected @endif @endisset->First</option>
											<option value="double"@isset($room_details->bed_option)@if($room_details->bed_option=='double') selected @endif @endisset->Second</option>
											<option value="triple"@isset($room_details->bed_option)@if($room_details->bed_option=='triple') selected @endif @endisset->Triple</option>

										
										</select>
										</div>
										</div>


										<div class="form-group col-6">
										<label class="col-form-label">Attach bathroom</label>
										<div>
										<select name="attach_bathroom" class="form-control">
										
											<option value="yes"@isset($room_details->attach_bathroom)@if($room_details->attach_bathroom=='yes') selected @endif @endisset->Yes</option>
											<option value="no"@isset($room_details->attach_bathroom)@if($room_details->attach_bathroom=='no') selected @endif @endisset->No</option>
										

										
										</select>
										</div>
										</div>
										
										<div class="form-group col-6">
										<label class="col-form-label">Balcony</label>
										<div>
										<select name="balcony" class="form-control">
										
											<option value="yes"@isset($room_details->balcony)@if($room_details->free_wifi=='yes') selected @endif @endisset->Yes</option>
											<option value="no"@isset($room_details->balcony)@if($room_details->free_wifi=='no') selected @endif @endisset->No</option>
										</select>
										</div>
										</div>

										<div class="form-group col-6">
										<label class="col-form-label">BathTub</label>
										<div>
										<select name="Bathtub"class="form-control">
											
											<option value="yes"@isset($room_details->Bathtub)@if($room_details->free_wifi=='yes') selected @endif @endisset->Yes</option>
											<option value="no"@isset($room_details->Bathtub)@if($room_details->free_wifi=='no') selected @endif @endisset->No</option>
										</select>
										</div>
										</div>
										


										
									
								
									
									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									
									<div class="form-group col-12">
										<label class="col-form-label"> ABOUT THe ROOM SERVICE</label>
										<div>
                                            <textarea rows="10" name="description" class="form-control">{!! @$room_details->description !!}</textarea>
										</div>
									
									<div class="col-12">
									<button type="submit" class="btn">Save changes</button>
										<button type="button" class="btn-danger add-item m-r5"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                        
									</div>
								
								
							</form>
					
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
		
		   
			
@endsection
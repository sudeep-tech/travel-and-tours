<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')

			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) $_title @else @if(isset($ticketbookings))Edit Ticket Bookings Details @else Add Ticket booking Details @endif @endif</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
					<li>@if(isset($ticketbookings))Edit Ticket  Details @else Add Ticket bookings Details @endif</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
						@if(isset($_title)) $_title @else @if(isset($ticketbookings))Edit Ticket Booking Details @else Add Ticket booking Details @endif @endif
						</div>
						<div class="widget-inner">
						<form class="edit-profile m-b30" method="post" @if(isset($ticketbookings)) action="{{route('update-ticketbooking',$ticketbookings->id)}}" @else action="{{route('post-ticketbooking')}}" @endif enctype="multipart/form-data">
								@csrf
									<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Ticket Booking</h3>
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
										<label class="col-form-label">Country</label>
										<div>
											<input class="form-control" name="country" type="text" value="{{isset($ticketbookings->country)?$ticketbookings->country:''}}">
										</div>
                                    </div>
                                    
									<div class="form-group col-6">
										<label class="col-form-label">Current Address</label>
										<div>
											<input class="form-control" name="current_address" type="text" value="{{isset($ticketbookings->current_address)?$ticketbookings->current_address:''}}">
										</div>
                                    </div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Mobile number</label>
										<div>
											<input class="form-control"name="mobile_no" type="number" value="{{isset($ticketbookings->mobile_no)?$ticketbookings->mobile_no:''}}">
										</div>
                                    </div>
									
									
									
									<div class="form-group col-6">
									<label class="col-form-label">From</label>
										<div>
											<input class="form-control" name="from" type="text" value="{{isset($ticketbookings->from)?$ticketbookings->from:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>										
										
                                        <div class="form-group col-6">
									<label class="col-form-label">Where </label>
										<div>
											<input class="form-control" name="where" type="text" value="{{isset($ticketbookings->where)?$ticketbookings->where:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div>

                                        <div class="form-group col-6">
									<label class="col-form-label">Checkin-date </label>
										<div>
											<input class="form-control" name="checkin_date" type="date" value="@if(@$ticketbookings->checkin_date) {{$ticketbookings->checkin_date}} @endif">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div>

										

                                        <div class="form-group col-6">
									<label class="col-form-label">Checkout-date </label>
										<div>
											<input class="form-control" name="checkout_date" type="date" value="{{isset($ticketbookings->checkout_date)?$ticketbookings->checkout_date:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>
										
                                        <div class="form-group col-6">
										<label class="col-form-label">Airport pickup</label>
										<div>
										<select class="form-control"name="airport_pickup" type="text" >
											
											<option value="yes" @isset($ticketbookings->airport_pickup)@if(@$ticketbookings->airport_pickup=='yes') selected @endif @endisset>Yes</option>
										<option value="no" @isset($ticketbookings->airport_pickup)@if(@$ticketbookings->airport_pickup=='no') selected @endif @endisset>NO</option>
										
										</select>
										</div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Pickup location </label>
										<div>
											<input class="form-control" name="leaving_from" type="text" value="{{isset($ticketbookings->leaving_from)?$ticketbookings->leaving_from:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
					
					
											<!-- <input class="form-control" type="text" value=""> -->
									</div>
                                    <div class="form-group col-6">
									<label class="col-form-label">Airlines name </label>
										<div>
										<select class="form-control" name="airlines_name" type="text" >
										<option value="buddha" @isset($ticketbookings->airlines_name)@if(@$ticketbookings->airlines_name=='buddha') selected @endif @endisset>Buddha Airlines</option>
										<option value="shree" @isset($ticketbookings->airlines_name)@if(@$ticketbookings->airlines_name=='shree') selected @endif @endisset>Shree Airlines</option>
										<option value="yeti" @isset($ticketbookings->airlines_name)@if(@$ticketbookings->airlines_name=='yeti ') selected @endif @endisset>Yeti Airlines</option>
										<option value="shaurya" @isset($ticketbookings->airlines_name)@if(@$ticketbookings->airlines_name=='shaurya') selected @endif @endisset>Shaurya Airlines</option>
										<option value="himalayan" @isset($ticketbookings->airlines_name)@if(@$ticketbookings->airlines_name=='himalayan') selected @endif @endisset>Himalayan Airlines</option>
										<option value="summit" @isset($ticketbookings->airlines_name)@if(@$ticketbookings->airlines_name=='summit') selected @endif @endisset>Summit Airlines</option>
                                        </select>
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div>
                                        <div class="form-group col-6">
									<label class="col-form-label">Flight number </label>
										<div>
											<input class="form-control" name="flight_num" type="number" value="{{isset($ticketbookings->flight_num)?$ticketbookings->flight_num:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div>    
                                        <div class="form-group col-6">
									<label class="col-form-label">Flight time </label>
										<div>
											<input class="form-control" name="flight_time" type="time" value="{{isset($ticketbookings->flight_time)?$ticketbookings->flight_time:''}}">
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
                                        </div> 
										
										<div class="form-group col-6">
										<label class="col-form-label">Child</label>
										<div>
										<select name="child" class="form-control">
										
											<option value="yes" @isset($ticketbookings->child)@if(@$ticketbookings->child=='yes') selected @endif @endisset>Yes</option>
											<option value="no"@isset($ticketbookings->child) @if(@$ticketbookings->child=='no') selected @endif @endisset>No</option>
										</select>
										</div>
										</div>

										<div class="form-group col-6">
										<label class="col-form-label">Adult</label>
										<div>
										<select name="adult" class="form-control">
										
											<option value="yes" @isset($ticketbookings->adult)@if(@$ticketbookings->adult=='yes') selected @endif @endisset>Yes</option>
											<option value="no"@isset($ticketbookings->adult) @if(@$ticketbookings->adult=='no') selected @endif @endisset>No</option>
										</select>
										</div>
										</div>


								
						
						
							<div class="col-12">
							<button type="reset" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-trash"></i>Delete</button>
							<button type="submit" class="btn">Save</button>
							</div>

				</form>

			</div>
		</div>

	</div>		

		
		
			
    @endsection
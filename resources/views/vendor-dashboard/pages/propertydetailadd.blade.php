<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')

		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($property_detail))  Edit  Tour Package  Details @else  Add Tour Package @endif @endif</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>
					<li>@if(isset($property_detail))Edit Property Details @else Add Property Details @endif</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
						<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($property_detail))  Edit  Tour Package  Details @else  Add Tour Package @endif @endif</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" @if(isset($property_detail)) action="{{route('update-property-detail',$property_detail->id)}}" @else action="{{route('post-property-detail')}}" @endif enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Property details </h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Property Name</label>
										<div>
											<input class="form-control" name="property_name" type="text" value="{{isset($property_detail->property_name)?$property_detail->property_name:''}}">
										</div>
									</div>


									<div class="form-group col-6">
									    <label class="col-form-label">Property Address</label>
										<div>
											<input class="form-control" name="property_address" type="text" value="{{isset($property_detail->property_address)?$property_detail->property_address:''}}">
											@error('property_address')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
                                			@enderror
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
									</div>

										<div class="form-group col-6">
									<label class="col-form-label">District</label>
										<div>
											<select name="district_id"  class="form-control">
                                                <option value="1" @if(@$property_detail->district_id==1) selected @endif >Kathmandu</option>
                                                <option value="2" @if(@$property_detail->district_id==2) selected @endif>Lalitpur</option>
                                                <option value="3" @if(@$property_detail->district_id==3) selected @endif>Bhaktapur</option>
											</select>
											@error('district_id')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
                                			@enderror
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
										</div>	
									
									
                                        <div class="form-group col-6">
									    <label class="col-form-label">Language Spoken</label>
										<div>
											<input class="form-control" name="language_spoken" type="text" value="{{isset($property_detail->language_spoken)?@$property_detail->language_spoken:''}}">
											@error('language_spoken')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
                                			@enderror
										</div>
											<!-- <input class="form-control" type="text" value=""> -->
									</div>
									<div class="form-group col-6">
									<label class="col-form-label">Contact</label>
										<div>
                                            <input class="form-control" name="phone_num" type="number" value="{{isset($property_detail->phone_num)?@$property_detail->phone_num:''}}">
											@error('phone_num')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
                                			@enderror
										</div>
									</div>
									<div class="form-group col-6">
									<label class="col-form-label">Number of Floors</label>
										<div>
                                            <input class="form-control" name="no_of_floors"type="number" value="{{isset($property_detail->no_of_floors)?@$property_detail->no_of_floors:''}}">
											@error('no_of_floors')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
                                			@enderror
										</div>
									</div>
                                 
									<div class="form-group col-6">
											<label class="col-form-label">Image</label>
											<div>
												<input type="file" class="form-control" name="image"  accept="image/*" onchange="readUrl(this,'thumb');">
												@error('image')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>

                                			@enderror
											</div>
											<div class="col-12" @if(!isset($property_detail->image)) hidden @endif>
												@if(isset($property_detail->image))
													<img src="{{asset('uploads/images/hotel_details/'.@$property_detail->image)}}" id='thumb' style="height:150px;">
												@else
													<img src="" style="height:120px;" id="thumb" hidden>
												@endif
											</div>
									</div>

									<div class="form-group col-12">
										<label class="col-form-label">Description</label>
										<div>
                                            <textarea rows="10" name="description" class="form-control">{{isset($property_detail->description)?$property_detail->description:''}}</textarea>
											@error('description')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
                                			@enderror
										</div>
									</div>
									<div class="col-12">
                                        <button type="submit" class="btn">Save changes</button>
										<button type="button" class="btn-danger add-item m-r5"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                        
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
    </main>
@endsection
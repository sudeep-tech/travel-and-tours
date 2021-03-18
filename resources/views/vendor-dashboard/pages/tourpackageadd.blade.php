<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')


			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($tourpackages))  Edit  Tour Package  Details @else  Add Tour Package @endif @endif</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
					<li>@if(isset($tourpackages))Edit  Tour Package Details @else Add  Tour Package Details @endif</li>
				</ul>
			</div>	
			    <div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
						<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($tourpackages))TourPackage  Details @else Tour Package @endif @endif <h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" @if(isset($tourpackages)) action="{{route('update-tourpackage',$tourpackages->id)}}" @else  action="{{route('post-tourpackage')}}" @endif enctype="multipart/form-data">
							@csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
										<h3>Tour Package</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Title</label>
										<div>
											<input class="form-control"name="Title" type="text" value="{{isset($tourpackages->Title)?$tourpackages->Title:''}}">
										</div>
									</div>
									<div class="form-group col-6">
								        <label class="col-form-label">Tour type</label>
								        <div>
										<select name="travel_type" class="form-control"> 
							
											<option value="lesiuretour" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='lesiuretour')?'selected':''}} @endif>Lesiure Tour</option>
											<option value="junglesafari" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='junglesafari')?'selected':''}} @endif>Jungle Safari Tour</option>
											<option value="culturalplaces" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='culturalplaces')?'selected':''}} @endif>Cultural Places</option>
											<option value="birdwatching" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='birdwatching')?'selected':''}} @endif>Birdwatching</option>
											<option value="travelandtipsinfo" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='travelandtipsinfo')?'selected':''}} @endif>Travel and Tips Information</option>
											<option value="privatedaytour" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='privatedaytour')?'selected':''}} @endif>Private Day Tour</option>
											<option value="unesco_sites" @if(isset($tourpackages_details->travel_type)) {{ (@$tourpackages_details->travel_type=='unesco_sites')?'selected':''}} @endif>UNESCO SITES</option>
										 </select>
										 
								       </div>
									</div>
									
								

									<div class="form-group col-6">
										<label class="col-form-label">Service level</label>
										<div>
											<input class="form-control"name="service_level" type="text" value="{{isset($tourpackages->service_level)?$tourpackages->service_level:''}}">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Age requirement</label>
										<div>
											<input class="form-control"name="age_requirement" type="number" value="{{isset($tourpackages->age_requirement)?$tourpackages->age_requirement:''}}">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">No of people</label>
										<div>
											<input class="form-control"name="num_people" type="text" value="{{isset($tourpackages->num_people)?$tourpackages->num_people:''}}">
										</div>
                                    </div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Travel period</label>
										<div>
											<input class="form-control"name="travel_period" type="number" value="{{isset($tourpackages->travel_period)?$tourpackages->travel_period:''}}">
										</div>
                                    </div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Guide</label>
										<div>
											<input class="form-control"name="guide" type="text" value="{{isset($tourpackages->guide)?$tourpackages->guide:''}}">
										</div>
                                    </div>
                                    
                                    <div class="form-group col-6">
										<label class="col-form-label">Price</label>
										<div>
											<input class="form-control"name="price" type="number" value="{{isset($tourpackages->price)?$tourpackages->price:''}}">
										</div>
									</div>

									<div class="form-group col-6">
								      <label class="col-form-label">Image</label>
								    <div>
									<input type="file" class="form-control" name="image"  accept="image/*">
									@error('image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="col-12" @if(!isset($tourpackages->image)) hidden @endif>
									@if(isset($tourpackages->image))
										<img src="{{asset('uploads/images/tour_packages/'.@$tourpackages->image)}}" style="height:150px;">
									@endif
								</div>
							
							</div>
							

									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">travel package description</label>
										<div>
											<textarea class="form-control "name="description"> </textarea>
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
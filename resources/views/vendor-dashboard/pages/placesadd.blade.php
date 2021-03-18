<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')

			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($place_details))Place Details @else Place @endif @endif</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
					<li>@if(isset($place_details))Edit Place Details @else Add Places  Details @endif</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
						@if(isset($_title)) {{$_title}} @else @if(isset($place_details))Update District Details @else Add Place @endif @endif
					    </div>
						<div class="widget-inner">
						<form class="edit-profile m-b30" method="post" @if(isset($place_details)) action="{{route('update-place',$place_details->id)}}" @else action="{{route('post-place')}}" @endif enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="ml-auto">
											<h3>Places</h3>
									</div>
                                </div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Title</label>
										<div>
											<input class="form-control" name="Title" type="text" value="{{isset($place_details->Title)?$place_details->Title:''}}">
										</div>

									</div>
						

								   <div class="form-group col-6">
								        <label class="col-form-label">District</label>
								        <div>
								           <select name="district_id" class="form-control"> 
											@if(isset($districts))
											@foreach($districts as $ind_districts)
											<option value="{{@$ind_districts->id}}">{{@$ind_districts->district_name}}</option>
											@endforeach
											@endif
										 </select>
								       </div>
									</div>
									<div class="form-group col-6">
								        <label class="col-form-label">Travel type</label>
								        <div>
										<select name="travel_type" class="form-control"> 
										<option value="trekking" @if(isset($place_details->travel_type)) {{(@$place_details->travel_type=='trekking')?'selected':''}}@endif>Trekking</option>
											<option value="mountain_adventure" @if(isset($place_details->travel_type)) {{ (@$place_details->travel_type=='mountain_adventure')?'selected':''}} @endif>Mountain Adventure</option>
											<option value="cultural_places" @if(isset($place_details->travel_type)) {{ (@$place_details->travel_type=='cultural_places')?'selected':''}} @endif>Cultural Places</option>
											<option value="jungle_safari" @if(isset($place_details->travel_type)) {{ (@$place_details->travel_type=='jungle_safari')?'selected':''}} @endif>Jungle Safari</option>
											<option value="adventure_places" @if(isset($place_details->travel_type)) {{ (@$place_details->travel_type=='adventure_places')?'selected':''}} @endif>Adventure Places</option>
											<option value="paragliding" @if(isset($place_details->travel_type)) {{ (@$place_details->travel_type=='paragliding')?'selected':''}} @endif>Paragliding</option>
											<option value="unesco_sites" @if(isset($place_details->travel_type)) {{ (@$place_details->travel_type=='unesco_sites')?'selected':''}} @endif>UNESCO SITES</option>
										 </select>
								       </div>
									</div>
									
								

									
									<div class="form-group col-6">
										<label class="col-form-label">Overview</label>
										<div>
											<input class="form-control" name="overview" type="text" value="{{isset($place_details->overview)?$place_details->overview:''}}">
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
								<div class="col-12" @if(!isset($place_details->image)) hidden @endif>
									@if(isset($place_details->image))
										<img src="{{asset('uploads/images/place_details/'.@$place_details->image)}}" style="height:150px;">
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
							<label class="col-form-label">Description</label>
							<div>
								<textarea rows="10" name="description" class="form-control"></textarea>
							</div>
									
									<div class="col-12">
										<button type="reset" class="btn-danger"><i class="fa fa-fw fa-trash"></i>Clear Data</button>
										<button type="submit" class="btn">Save changes</button>
									</div>
								</div>
					</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		
    
    @endsection
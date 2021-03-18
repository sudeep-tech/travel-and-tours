@extends('layouts.vendor-layout')
@section('main-content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title">Property Detail</h4>
	<ul class="db-breadcrumb-list">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		<li>Property Detail</li>
	</ul>
</div>	

@if(isset($property_details))
<div class="row">
<!-- Your Profile Views Chart -->
<div class="col-lg-12">
	<div class="widget-box">
		<div class="wc-title">
			<h4>Your Properties</h4>
		</div>
	
		@foreach($property_details as $ind_property_detail)
		<div class="widget-inner">
			<div class="card-courses-list admin-courses">
				<div class="card-courses-media">
					<img src="{{asset('uploads/images/hotel_details/'.@$ind_property_detail->image)}}" alt=""/>
				</div>
				<div class="card-courses-full-dec">
					<div class="card-courses-title">
				
					</div>
					
					<div class="card-courses-list-bx">
						<ul class="card-courses-view">
							<li>
							<h6 class="m-b5">property name:{{$ind_property_detail->property_name}}</h6>
							</li>
							
							<li>
								<h6 class="m-b5">Address: {{@$ind_property_detail->district_id.' '.@$ind_property_detail->property_address}}</h6>
							</li>

							<li>
								<h6 class="m-b5">Language Spoken: {{@$ind_property_detail->language_spoken}}</h6>
							</li>
							<li>
								<h6 class="m-b5">No. of Floors: {{@$ind_property_detail->no_of_floors}} Floors</h6>
							</li>
						</ul>
					</div>
					<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10">Property Description</h6>
							<p>{!! @$ind_property_detail->description !!}</p>	
						</div>
						<div class="col-md-12">
							<a href="{{route('edit-propertydetail',@$ind_property_detail->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-propertydetail',@$ind_property_detail->id)}}" class="btn red outline radius-xl ">Delete</a>
						</div>
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
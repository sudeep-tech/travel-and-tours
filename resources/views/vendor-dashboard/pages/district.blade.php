@extends('layouts.vendor-layout')
@section('main-content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title">Districts</h4>
	<ul class="db-breadcrumb-list">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		<li>Districts List</li>
	</ul>
</div>	

@if(isset($district_details))
<div class="row">
<!-- Your Profile Views Chart -->
<div class="col-lg-12">
	<div class="widget-box">
		<div class="wc-title">
			<h4>Districts</h4>
		</div>
	
		@foreach($district_details as $ind_district_details)
		<div class="widget-inner">
			<div class="card-courses-list admin-courses">
				<div class="card-courses-media">
					<img src="{{asset('uploads/images/district/'.@$ind_district_details->image)}}" alt=""/>
				</div>
				<div class="card-courses-full-dec">
					<div class="card-courses-title">
						
						<h4>{{$ind_district_details->district_name}}</h4>
					</div>
					<div class="card-courses-list-bx">
						<ul class="card-courses-view">

							<li>
								<h6 class="m-b5">State: {{ucfirst(@$ind_district_details->state)}}</h6>
							</li>
							
						</ul>
					</div>
					<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10">Property Description</h6>
							<p>{!! @$ind_district_details->description !!}</p>	
						</div>
						<div class="col-md-12">
							<a href="{{route('edit-district',@$ind_district_details->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-district',@$ind_district_details->id)}}" class="btn red outline radius-xl ">Delete</a>
						</div>
					</div>
				</div>
			</div>
			</div>
			@endforeach
					
				
			</div>
		</div>
	</div>
	@else
	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-12 m-b30">
			<div class="widget-box">
				
				<div class="widget-inner">
					<div class="card-courses-list admin-courses">
						<h3 style="color:red;" class="text-center">No District Added Yet!</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif


 @endsection   
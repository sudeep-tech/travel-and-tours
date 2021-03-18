@extends('layouts.vendor-layout')
@section('main-content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title">Hotel & Resto Package Detail</h4>
	<ul class="db-breadcrumb-list">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		<li>Hotel & Resto Package Detail</li>
	</ul>
</div>	

@if(isset($packages))
<div class="row">
<!-- Your Profile Views Chart -->
<div class="col-lg-12">
	<div class="widget-box">
		<div class="wc-title">
			<h4>Your Package</h4>
		</div>
		
		@foreach($packages as $ind_package)
		<div class="widget-inner">
			<div class="card-courses-list admin-courses">
				<div class="card-courses-media">
					
					<img src="{{asset('uploads/images/hotel_packages/'.@$ind_package->image)}}" alt=""/>
				</div>
				<div class="card-courses-full-dec">
					<div class="card-courses-title">
						
						<h4>{{$ind_package->package_title}}</h4>
					</div>
					<div class="card-courses-list-bx">
						<ul class="card-courses-view">
						
							<li>
								<h6 class="m-b5">property name: {{@$ind_package->hotel_details->property_name}}</h6>
							</li>
							<li>
							<h6 class="m-b5">carservice: {{@$ind_package->car_service}}</h6>
							</li>
                            
							<li>
								<h6 class="m-b5">pickup time: {{@$ind_package->pickup_time}}</h6>
							</li>
							<li>
								<h6 class="m-b5">pickup destination: {{@$ind_package->pickup_destination}}</h6>
							</li>

							<li>
								<h6 class="m-b5">no people: {{@$ind_package->no_people}}</h6>
							</li>
							<li>
								<h6 class="m-b5">breakfast: {{@$ind_package->breakfast}}</h6>
							</li>
							<li>
								<h6 class="m-b5">lunch: {{@$ind_package->lunch}}</h6>
							</li>
							<li>
								<h6 class="m-b5">dinner: {{@$ind_package->dinner}}</h6>
							</li>
						
							
							<li>
							<h6 class="m-b5">visit localplace: {{@$ind_package->visit_localplace}}</h6>
							</li>
							
							
							
							
						</ul>
					</div>
					<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10">Package Description</h6>
							<p>{!! @$ind_package->description !!}</p>	
						</div>
						<div class="col-md-12">
						<a href="{{route('edit-package',@$ind_package->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-package',@$ind_package->id)}}" class="btn red outline radius-xl ">Delete</a>
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
								<h3 style="color:red;" class="text-center">No Package Added  Yet!</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endif

@endsection
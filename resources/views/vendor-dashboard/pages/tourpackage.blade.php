@extends('layouts.vendor-layout')
@section('main-content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title">Tour Package Detail</h4>
	<ul class="db-breadcrumb-list">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		<li>Tour Package Detail</li>
	</ul>
</div>	
@if(isset($travelpackages))
<div class="row">
<!-- Your Profile Views Chart -->
<div class="col-lg-12">
	<div class="widget-box">
		<div class="wc-title">
			<h4>Tour Package</h4>
		</div>
	
		@foreach($travelpackages as $ind_tourpackage)
		<div class="widget-inner">
			<div class="card-courses-list admin-courses">
				<div class="card-courses-media">
					
					<img src="{{asset('uploads/images/tour_packages/'.@$ind_tourpackage->image)}}" alt=""/>
				</div>
				<div class="card-courses-full-dec">
					<div class="card-courses-title">
						
						<h4>{{$ind_tourpackage->Title}}</h4>
					</div>
					<div class="card-courses-list-bx">
						<ul class="card-courses-view">
							<!-- <li class="card-courses-user">
								<div class="card-courses-user-pic">
									<img src="{{asset('vendor/assets/images/testimonials/pic3.jpg')}}" alt=""/>
								</div>
								<div class="card-courses-user-info">
									<h5>Teacher</h5>
									<h4>Keny White</h4>
								</div>
							</li> -->

						
								
						
							<!-- <li class="card-courses-review">
								<h5>3 Review</h5>
								<ul class="cours-star">
									<li class="active"><i class="fa fa-star"></i></li>
									<li class="active"><i class="fa fa-star"></i></li>
									<li class="active"><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</li> -->
							<!-- <li class="card-courses-stats">
								<a href="#" class="btn button-sm green radius-xl"></a>
							</li> -->
							<!-- <li class="card-courses-price">
								<del>$190</del>
								<h5 class="text-primary">$120</h5>
							</li> -->
							
							
						
                            
							<li>
								<h6 class="m-b5">service_level: {{@$ind_tourpackage->service_level}}</h6>
							</li>
							<li>
								<h6 class="m-b5">age_requiremnet: {{@$ind_tourpackage->age_requirement}}</h6>
							</li>
							<li>
								<h6 class="m-b5">Travel type: {{ucwords(@$ind_tourpackage->travel_type)}}</h6>
							</li>

							<li>
								<h6 class="m-b5">num_people: {{@$ind_tourpackage->num_people}}</h6>
							</li>
							<li>
								<h6 class="m-b5">travel_period: {{@$ind_tourpackage->travel_period}}</h6>
							</li>
							
							<li>
								<h6 class="m-b5">guide: {{@$ind_tourpackage->guide}}</h6>
							</li>
							<li>
								<h6 class="m-b5">price: Rs  {{@$ind_tourpackage->price}}</h6>
							</li>
							
						
							
							
						</ul>
					</div>
					<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10">Package Description</h6>
							<p style='box-shadow:1px 1px 1px 1px silver; background-color:aliceblue;'>{!! @$ind_tourpackage->description !!}</p>	
						</div>
						<div class="col-md-12">
						<a href="{{route('edit-tourpackage',@$ind_tourpackage->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-tourpackage',@$ind_tourpackage->id)}}" class="btn red outline radius-xl ">Delete</a>
						</div>
					</div>
				</div>
			</div>
			</div>
			@endforeach
			@else
			<div class="widget-inner">
			<div class="card-courses-list admin-courses">
				
				<div class="card-courses-full-dec">
					<h3>No Travel Package Added At a Moment!</h3>
				   </div>
			    </div>
		    </div>
	     </div>
    </div>
@endif

@endsection   

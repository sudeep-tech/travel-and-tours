@extends('layouts.vendor-layout')
@section('main-content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title">Places</h4>
	<ul class="db-breadcrumb-list">
		<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		<li>Places List</li>
	</ul>
</div>	

@if(isset($place_details))
     <div class="row">
<!-- Your Profile Views Chart -->
     <div class="col-lg-12">
	 <div class="widget-box">
	 <div class="wc-title">
	 <h4>Places</h4>
	 </div>
	
           @foreach($place_details as $ind_places)
		        <div class="widget-inner">
			        <div class="card-courses-list admin-courses">
				        <div class="card-courses-media">
					         <img src="{{asset('uploads/images/place_details/'.@$ind_places->image)}}" alt=""/>
				    </div>
 
				         <div class="card-courses-list-bx">
						 <ul class="card-courses-view">
							
						 </ul>
				         </div>
						 <div class="card-courses-list-bx">
						 <ul class="card-courses-view"> 
						 <li>
								<h6 class="m-b5">Title: {{@$ind_places->Title}}</h6>
							</li>
							<li>
								<h6 class="m-b5">district_id: {{@$ind_places->district_id}}</h6>
							</li>
							<li>
								<h6 class="m-b5">Travel type: {{ucwords(str_replace('_',' ',@$ind_places->travel_type))}}</h6>
                            </li>
						 </ul>
						 <div class="card-courses-list-bx">
						 <ul class="card-courses-view">
							<li>
								<h6 class="m-b5">weather: {{@$ind_places->weather}}</h6>
                            </li>
						 </ul>
						 <div class="card-courses-list-bx">
						 <ul class="card-courses-view"> 
							<li>
								<h6 class="m-b5">status: {{@$ind_places->status}}</h6>
							</li>						
						</ul>
						   </div>
						<div class="row card-courses-dec">
						<div class="col-md-12">
							<h6 class="m-b10"> Description</h6>
							<p>{!! @$ind_places->description !!}</p>	
						</div>
						<div class="col-md-12">
							<a href="{{route('edit-place',@$ind_places->id)}}" class="btn green radius-xl outline">Edit</a>
							<a href="{{route('delete-place',@$ind_places->id)}}" class="btn red outline radius-xl ">Delete</a>
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
								<h3 style="color:red;" class="text-center">No Places Added Yet!</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
@endif

 @endsection






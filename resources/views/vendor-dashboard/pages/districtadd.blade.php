<!--Main container start -->
@extends('layouts.vendor-layout')
@section('main-content')
	<div class="db-breadcrumb">
		<h4 class="breadcrumb-title">@if(isset($_title)) {{$_title}} @else @if(isset($districts))District Details @else District @endif @endif <h4>
		<ul class="db-breadcrumb-list">
			<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
		
			<li>@if(isset($districts))Edit District Details @else Add District Details @endif</li>
		</ul>
	</div>	
	<div class="row">
		<!-- Your Profile Views Chart -->
		<div class="col-lg-12 m-b30">
			<div class="widget-box">
				<div class="wc-title">
				@if(isset($_title)) {{$_title}} @else @if(isset($districts))Update District Details @else Add District @endif @endif
				</div>
				<div class="widget-inner">
					<form class="edit-profile m-b30" method="post" @if(isset($districts)) action="{{route('update-district',$districts->id)}}" @else action="{{route('post-district')}}" @endif enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-12">
								<div class="ml-auto">
									<h3>District</h3>
								</div>
							</div>
								
							<div class="form-group col-6">
								<label class="col-form-label">District name</label>
								<div>
									<input class="form-control" name="district_name" type="text" value="{{isset($districts->district_name)?@$districts->district_name:''}}">
								</div>
									
							</div>

							
							<div class="form-group col-6">
								<label class="col-form-label">State</label>
								<div>
									<select name="state" class="form-control">
										@for($i=1;$i<=7;$i++)
										<option value="state{{$i}}" @isset($districts->state) @if($districts->state=='state'.$i) selected @endif @endisset >State {{$i}}</option>
										@endfor
									</select>
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
								<div class="col-12" @if(!isset($districts->image)) hidden @endif>
									@if(isset($districts->image))
										<img src="{{asset('uploads/images/district/'.@$districts->image)}}" style="height:150px;">
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
								<button type="reset" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-trash"></i>Delete</button>
								<button type="submit" class="btn">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>		
</div>
@endsection
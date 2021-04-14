@extends('layouts.frontend_layout')
@section('main-content')
<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
         
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 Kathmandu NP 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://9849635711">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="aafnaideal.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last pr-md-5">

<form class="form-horizontal" method="POST" action="/contact">
  
  {{ csrf_field() }}
     
 <div class="form-group">
  <label for="Name">Name: </label>
  <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
 </div>
 <div class="form-group">
  <label for="email">Email: </label>
  <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
 </div>
 <div class="form-group">
  <label for="message">Message: </label>
  <textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
 </div>
 <div class="form-group">
   <button type="submit" class="btn btn-primary" value="Send">Send</button>
 </div>
   
</form>
          
          </div>

          <div class="col-md-6">
          	<div id="map"></div>
          </div>
        </div>
      </div>
    </section>
    


@endsection
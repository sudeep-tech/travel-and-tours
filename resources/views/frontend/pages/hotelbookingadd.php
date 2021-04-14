@extends('layouts.frontend_layout')
@section('main-content')

<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Please Book Your Hotel Room From Here</h2>
          </div>
         
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 Kathmandu NP 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://9849635711">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="aafnaideal.com">pokhrelsudeep.com.np</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last pr-md-5">
 
 
 <form action="submit" method ="POST">
 @csrf
      
  <div class="form-group">
   <label for="Name">Property Address: </label>
   <input type="text" class="form-control" id="name" placeholder="Property Address" name="property_address" required>
  </div>
 <br>
 <div class="form-group">
   <label for="Name">Property Name: </label>
   <input type="text" class="form-control" id="property_name" placeholder="Property Address" name="property_name" required>
  </div>
  </br>
  <div class="form-group">
   <label for="email">Room type: </label>
   <input type="text" class="form-control" id="room_type" placeholder="Room Type" name="room_type" required>
  </div>
  <br>

  <div class="form-group">
   <label for="message">Contact Name: </label>
   <input type="text" class="form-control" id="contact_name" placeholder="Contact Name" name="contact_name" required>
  </div>
 <br>
  <div class="form-group">
   <label for="message">Mobile Phone: </label>
   <input type="text" class="form-control" id="mobile_phone" placeholder="Mobile" name="mobile_phone" required>
  </div>
 <br> <br>
  <div class="form-group">
   <label for="message">Email Address: </label>
   <input type="email" class="form-control" id="email_address" placeholder="Email" name="email_address" required>
  </div>
<br>

  <div class="form-group">
   <label for="message">Price: </label>
   <input type="number" class="form-control" id="price" placeholder="Price" name="price" required>
  </div>
  <div class="form-group">
   <br>

  <div class="form-group">
   <label for="message">Arrival Time: </label>
   <input type="time" class="form-control" id="arrival_time" placeholder="time" name="arrival_time" required>
  </div>
  <div class="form-group">
   <br>
   <label for="message">Arrival Date: </label>
   
   <input type="date" class="form-control" id="arrival_date" placeholder="date" name="arrival_date" required>
  </div>
<br>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" value="Send">Send</button>
  </div>
    
</form>
          </div>
        </div>
      </div>
</section>


@endsection
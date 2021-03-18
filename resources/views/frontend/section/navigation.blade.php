
   
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="{{route('home')}}">Adventure</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse"  height: 10px; ata-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav" style="background-color:#212780;">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
			  
	          
	          <li class="nav-item dropdown">
			  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Places
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{route('place_by_travel_type','trekking')}}">Trekking</a>
				<a class="dropdown-item" href="{{route('place_by_travel_type','mountain_adventure')}}">Mountain Adventure</a>
				<a class="dropdown-item" href="{{route('place_by_travel_type','cultural_places')}}">Cultural PLaces</a>
				<a class="dropdown-item" href="{{route('place_by_travel_type','jungle_safari')}}">Jungle Safari</a>
				<a class="dropdown-item" href="{{route('place_by_travel_type','adventure_places')}}">Adventure Places</a>
				<a class="dropdown-item" href="{{route('place_by_travel_type','paragliding')}}">Paradlying</a>
				<a class="dropdown-item" href="{{route('place_by_travel_type','unesco_sites')}}">UNESCO SITE</a>
				
				
				<a class="dropdown-item" href="#"></a>
				

				</div>

			  <!-- <a href="{{route('places')}}" class="nav-link">Places</a> -->
			  </li>
			  <li class="nav-item dropdown">
			  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   Trek
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="">Everest short trek</a>
				<a class="dropdown-item" href="#">Poon hill Trek</a>
				<a class="dropdown-item" href="#">Annapurna Base Trek</a>
				<a class="dropdown-item" href="#">Jomsom Mukinath Trek</a>
				<a class="dropdown-item" href="#">Langtang Goaskunda</a>
				<a class="dropdown-item" href="#">Chisapani-Nagarkot-Dhulikhel Trek</a>
				<a class="dropdown-item" href="#">UNESCO SITE</a>
				
				
				<a class="dropdown-item" href="#"></a>
				

				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
				<li class="nav-item dropdown active">
			  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Pilgrimage Tour
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Mukinath</a>
				<a class="dropdown-item" href="#">Mukhtinath Tour</a>
				<a class="dropdown-item" href="#">Paushupathinath Darshan</a>
				<a class="dropdown-item" href="#">Lumbini</a>
				<a class="dropdown-item" href="#">Halesi Mahadev</a>
				<a class="dropdown-item" href="#">Devghat Darshan Tour</a>
				<a class="dropdown-item" href="#">Mukhtinath Darshan </a>
				
				
				<a class="dropdown-item" href="#"></a>
				

				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
				</div>
				<li class="nav-item dropdown">
			  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				 Tour Activities and Packages
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{route('tour_by_travel_type','lesiuretour')}}">Lesiure Tour</a>
				<a class="dropdown-item" href="{{route('tour_by_travel_type','junglesafari')}}">Jungle Safari Tour </a>
				<a class="dropdown-item" href="{{route('tour_by_travel_type','culturalplaces')}}">Cultural PLaces</a>
				<a class="dropdown-item" href="{{route('tour_by_travel_type','travelandtipsinfo')}}">Travel and Tips Information</a>
				<a class="dropdown-item" href="{{route('tour_by_travel_type','birdwatching')}}">Nepal Bird Watching Tour</a>
				<a class="dropdown-item" href="{{route('tour_by_travel_type','privatedaytour')}}">Private Day Tour</a>
				<a class="dropdown-item" href="{{route('tour_by_travel_type','unesco_sites')}}">UNESCO SITE</a>
				
				
				<a class="dropdown-item" href="#"></a>
				
				</div>
				<div class="dropdown-divider"></div>
 	          <li class="nav-item"><a href="{{route('hotels')}}" class="nav-link">Hotels</a></li>
	          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}"class="nav-link">Contact</a></li>
			 @guest <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
			  <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
			  <li class="nav-item"><a href="{{route('vendor-login')}}" class="nav-link">Goto Dashboard</a></li>
			  @else
			  @if(Auth::user()->role=='vendor' || Auth::user()->role=='admin')
			  <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			  @endif
			  <li class="nav-item"><a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit();">Logout</a></li>
			  <form method="post" action="{{route('logout')}}" id='logout-form'>
				@csrf
			  </form>
				
			  @endguest
	        </ul>
	      </div>
		</div>
		
		
	  </nav>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" >
	  @include('frontend.section.notification')
	  </nav>
    <!-- END nav -->
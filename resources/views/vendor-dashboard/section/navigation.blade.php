</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="index.html" class="ttr-logo">
				 	
						<img class="ttr-logo-desktop" alt="" src="" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="{{route('dashboard')}}" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">9 New</span>
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.html">My profile</a></li>
								<li><a href="list-view-calendar.html">Activity</a></li>
								<li><a href="mailbox.html">Messages</a></li>
								@guest 
								<li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
								<li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
								@else
								<li class="nav-item"><a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit();">Logout</a></li>
								<form method="post" action="{{route('logout')}}" id='logout-form'>
									@csrf
								</form>
								@endguest
			  				</ul>
	      				</div>
					</li>
	  				
				
	    
					<li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							<a href="#">
								<i class="fa fa-music"></i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play"></i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="fa fa-smile-o"></i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="fa fa-picture-o"></i>
								<span>Pictures</span>
							</a>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="{{route('dashboard')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashboard</span>
		                </a>
		            </li>
					<li>
						<a href="" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
							<span class="ttr-label">Property</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	
                            <li>
		                		<a href="{{route('propertydetailadd')}}" class="ttr-material-button"><span class="ttr-label">Property Add</span></a>
							</li>
							<li>
		                		<a href="{{route('propertydetail')}}" class="ttr-material-button"><span class="ttr-label">View Property Details </span></a>
		                	</li>
		                </ul>
                    </li>
                    
                    <li>
						<a href="{{route('room')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
							<span class="ttr-label">Room</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{route('room')}}" class="ttr-material-button"><span class="ttr-label">View Room</span></a>
							</li>
							<li>
		                		<a href="{{route('roomadd')}}" class="ttr-material-button"><span class="ttr-label">Room Add</span></a>
							</li>
							<li>
		                		<a href="{{route('room-type')}}" class="ttr-material-button"><span class="ttr-label">View Room Type</span></a>
							</li>
							<li>
		                		<a href="{{route('roomtypeadd')}}" class="ttr-material-button"><span class="ttr-label">Room Type Add</span></a>
		                	</li>
                            
		                </ul>
                    </li>
                    
		                </a>
                    </li>
                    <li>
						<a href="{{route('package')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label"> Hotel and Restro Package</span>
						</a>
						<ul>
						<li>
		                		<a href="{{route('package')}}" class="ttr-material-button"><span class="ttr-label">Package</span></a>
							</li>
						<li>
		                		<a href="{{route('packageadd')}}" class="ttr-material-button"><span class="ttr-label">Add Package</span></a>
		                	</li>
						</ul>
						
					</li>
					<li>
						<a href="{{route('tourpackage')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label"> Tour package</span>
						</a>
						<ul>
						<li>
		                		<a href="{{route('tourpackage')}}" class="ttr-material-button"><span class="ttr-label">Package</span></a>
							</li>
						<li>
		                		<a href="{{route('tourpackageadd')}}" class="ttr-material-button"><span class="ttr-label">Tour Package</span></a>
		                	</li>
						</ul>
						
					</li>
					<li>
						<a href="" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
							<span class="ttr-label"> Booking</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
						<li>
		                		<a href="{{route('hotelbooking')}}" class="ttr-material-button"><span class="ttr-label">Hotel Booking</span></a>
							</li>
							<li>
		                		<a href="{{route('hotelbookingadd')}}" class="ttr-material-button"><span class="ttr-label">Hotel Booking Add</span></a>
							</li>		
						<li>
		                		<a href="{{route('tourbooking')}}" class="ttr-material-button"><span class="ttr-label">Tour Booking</span></a>
							</li>
							<li>
		                		<a href="{{route('tourbookingadd')}}" class="ttr-material-button"><span class="ttr-label">Tour Booking Add</span></a>
							</li>
							<li>
		                		<a href="{{route('ticketbooking')}}" class="ttr-material-button"><span class="ttr-label">Ticket Booking</span></a>
		                	</li>	
							<li>
		                		<a href="{{route('ticketbookingadd')}}" class="ttr-material-button"><span class="ttr-label">Ticket Booking Add</span></a>
		                	</li>	
						</ul>
						
					</li>
					
					<li>
						<a href="{{route('places')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label"> Places and District</span>
						</a>
						<ul>
						<li>
		                		<a href="{{route('places')}}" class="ttr-material-button"><span class="ttr-label">Places</span></a>
							</li>
						<li>
		                		<a href="{{route('placesadd')}}" class="ttr-material-button"><span class="ttr-label">Add Places</span></a>
							</li>
							<li>
		                		<a href="{{route('district')}}" class="ttr-material-button"><span class="ttr-label">District</span></a>
							</li>
						<li>
		                		<a href="{{route('districtadd')}}" class="ttr-material-button"><span class="ttr-label">Add District</span></a>
		                	</li>	

						</ul>
						
					</li>
					<li>
						<a href="{{route('mailbox')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-email"></i></span>
		                	<span class="ttr-label">Mailbox</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{route('mailbox')}}" class="ttr-material-button"><span class="ttr-label">Mailbox</span></a>
		                	</li>
		                	<li>
		                		<a href="{{route('mailcompose')}}" class="ttr-material-button"><span class="ttr-label">Compose</span></a>
		                	</li>
							<li>
		                		<a href="{{route('mailread')}}" class="ttr-material-button"><span class="ttr-label">Mail Read</span></a>
		                	</li>
		                </ul>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-calendar"></i></span>
		                	<span class="ttr-label">Calendar</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{route('basiccalender')}}" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
		                	</li>
		                	<li>
		                		<a href="{{route('listview')}}" class="ttr-material-button"><span class="ttr-label">List View</span></a>
		                	</li>
		                </ul>
		            </li>
					<li>
						<a href="" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
		                	<span class="ttr-label">Bookmarks</span>
		                </a>
		            </li>
					<li>
						<a href="{{route('review')}}" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-comments"></i></span>
		                	<span class="ttr-label">Review</span>
		                </a>
		            </li>
					<li>
						<a href="" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
		                	<span class="ttr-label">Add listing</span>
		                </a>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
		                	<span class="ttr-label">My Profile</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="{{('userprofile')}}" class="ttr-material-button"><span class="ttr-label">User Profile</span></a>
		                	</li>
		                	<li>
		                		<a href="{{('hotelprofile')}}" class="ttr-material-button"><span class="ttr-label">Hotel  Profile</span></a>
		                	</li>
		                </ul>
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<main class="ttr-wrapper">
		<div class="container-fluid">
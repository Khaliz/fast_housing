<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							@if(Auth::User()->isAdmin == 1)
							<li><a href="/user/chat"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							@else
							<li><a href="/user/chat"><i class="icon-material-outline-question-answer"></i> Support<span class="nav-tag">2</span></a></li>
							@endif

							
							<li><a href="/user/bookmark"><i class="icon-material-outline-star-border"></i> Notification</a></li>
							
						</ul>
						@if(Auth::user()->role == 'FastRep' && Auth::user()->isAdmin == 0)
						<ul data-submenu-title="Organize and Manage">
							
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
								<ul>
									
									<li><a href="/user/post">List a Property</a></li>
									<li><a href="/user/approved">Approved Listings<span class="nav-tag">2</span></a></li>
									<li><a href="/properties">All Listings <span class="nav-tag">2</span></a></li>
								</ul>	
							</li>
						</ul>
						@endif
                       @if(Auth::user()->role == 'Customer' && Auth::user()->isAdmin == 0)
						<ul data-submenu-title="Pay For Accomodation">
							<li><a href="{{url('/user/payment')}}"><i class="icon-material-outline-business-center"></i> Make Payment</a></li>
						</ul>
						@endif


						<ul data-submenu-title="Account">
						   
						   @if(Auth::user()->profile == true)
						<li><a href="/user/settings/{{Auth::user()->id}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
						  @else
						  <li><a href="/user/profile"><i class="icon-material-outline-settings"></i> Settings</a></li>
						  @endif
						  </li>
                       
                       
					   @guest
						   <li class="nav-item">
							   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						   </li>
						   
						   @if (Route::has('register'))
							   <li class="nav-item">
								   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							   </li>
						   @endif
					   @else
						   
					   @endguest
				   

							<li>
							<a href="{{ route('logout') }}"
									  onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
									    <i class="icon-material-outline-power-settings-new"></i>Logout
								   </a>
                                   
								   <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									   @csrf
								   </form> -->
							</li>
					
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->





                       <!--
						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-material-outline-power-settings-new">Logout</i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: hidden;">
                                 @csrf
                                </form>
                                
                            </li>
						</ul>
						-->
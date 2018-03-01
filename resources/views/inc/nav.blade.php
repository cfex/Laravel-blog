<nav class="navbar is-transparent is-warning">
	<div class="navbar-brand">
		<a class="navbar-item" href="/">
      <img src="{{asset('images/blog.logo.png')}}" alt="Blog logo" width="112" height="28">
    </a>
		<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div id="navbarExampleTransparentExample" class="navbar-menu">
		<div class="navbar-start">
			<a class="navbar-item" href="/">

      </a>
		</div>
		<div class="navbar-end">
			<div class="navbar-item">
				<div class="field is-grouped">
					@guest
					<a class="navbar-item" href="{{route('login')}}">
		        Login
		      </a>
					<a class="navbar-item" href="{{route('register')}}">
		        Join now!
		      </a>
					@endguest
					@auth
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						    <button class="button is-primary is-rounded is-outlined" aria-haspopup="true" aria-controls="dropdown-menu4">
						      <span>Welcome, {{ auth()->user()->name }}</span>
						      <span class="icon is-small">
						        <i class="fa fas fa-angle-down" aria-hidden="true"></i>
						      </span>
						    </button>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
									<div class="dropdown-item">
										<a href="/dashboard">Dashboard</a>
									</div>
						      <div class="dropdown-item">
										<a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
			                <span class="icon">
			                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
			                </span>
			                Logout
			              </a>
										@include('inc.logout.logout')
						      </div>
						    </div>
						  </div>
						</div>

					@endauth
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</nav>

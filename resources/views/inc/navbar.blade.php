<div class="container">
	<nav>
		<input type="checkbox" id="nav" class="hidden">
		<label for="nav" class="nav-btn" >
			<i></i>
			<i></i>
			<i></i>
		</label>
		

		<div class="nav-wrapper">
			<ul>
				<li><a href="/">HOME</a></li>
				<li><a href="/about">ABOUT US</a></li>
				<li><a href="/posts">BLOG</a></li>
				<li><a href="#">GALLERY</a></li>
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
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			@endguest
				<hr>
				
				<div class="social">
					FOLLOW US: 
					<a href="#"><img src="https://img.icons8.com/color/40/000000/facebook.png"></a>	
					<a href="#"><img src="https://img.icons8.com/color/40/000000/instagram-new.png"></a>
				</div>
				
			</ul>
			

		</div>
	</nav>
</div>
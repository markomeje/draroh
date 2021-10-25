<div class="fixed-top bg-white shadow-sm">
	<div class="py-2 bg-violet w-100">
		<div class="container">
			{{-- <a href="">Phone</a> --}}
		</div>
	</div>
	<div class="container">
		<div class="navbar py-4 px-0 d-flex align-items-center justify-content-between">
			<a href="{{ url('/') }}" class="logo-wrapper">
				<img src="/images/logos/logo.png" class="img-fluid object-fit-cover">
			</a>
			<div class="navbar-links d-flex justify-content-center align-items-center">
				<div>
					<ul class="d-flex align-items-center navbar-links-list">
						<li class="ml-3">
							<a href="{{ url('/') }}" class="text-smoky text-decoration-none">
								<p class="m-0">Home</p>
							</a>
						</li>
						<li class="ml-3">
							<a href="{{ url('/about') }}" class="text-smoky text-decoration-none">
								<p class="m-0">About</p>
							</a>
						</li>
						<li class="ml-3">
							<a href="{{ url('/pricing') }}" class="text-smoky text-decoration-none">
								<p class="m-0">Pricing</p>
							</a>
						</li>
						<li class="ml-3">
							<a href="{{ url('/contact') }}" class="text-smoky text-decoration-none">
								<p class="m-0">Contact</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="d-flex align-items-center">
				<div class="d-flex align-items-center">
					<div class="d-flex align-items-center navber-auth-links">
						@if(auth()->check())
							@if(auth()->user()->role === 'admin')
								<a href="{{ route('admin.dashboard') }}" >
									<p class="text-smoky m-0 font-weight-bolder">Dashboard</p>
								</a>
							@else
								<a href="{{ route('user.dashboard') }}" >
									<p class="text-smoky m-0">
										<span>My Account</span>
									</p>
								</a>
							@endif
						@else 
							<a href="{{ url('/login') }}" class="text-smoky text-decoration-none">
								<p class="m-0 pl-3">Login</p>
							</a>
							<a href="{{ url('/signup') }}" class="btn px-4 bg-violet btn-sm rounded-0 text-white ml-3">
								<p class="m-0">Signup</p>
							</a>
						@endif
					</div>
					<div class="hanburger">
						<div class="hanburger-icon ml-3 position-relative p-md-0 d-flex justify-content-end align-items-center cursor-pointer">
							<div class="icon-lines"></div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="navbar-menu shadow no-gutters bg-white position-fixed vh-100">
	<div class="menu-content vh-100 px-3 mt-4 pb-5">
		<a href="{{ url('/') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
			<p class="m-0">Home</p>
		</a>
		<a href="{{ url('/about') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
			<p class="m-0">About</p>
		</a>
		<a href="{{ url('/contact') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
			<p class="m-0">Contact</p>
		</a>
		<a href="{{ url('/pricing') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
			<p class="m-0">Pricing</p>
		</a>
		@if(auth()->check())
			@if(auth()->user()->role === 'admin')
				<a href="{{ route('admin.dashboard') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
					<p class="m-0">Dashboard</p>
				</a>
			@else
				<a href="{{ route('user.dashboard') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
					<p class="m-0">My Account</p>
				</a>
			@endif
		@else
			<a href="{{ url('/login') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
				<p class="m-0">Login</p>
			</a>
			<a href="{{ url('/signup') }}" class="d-block px-3 bg-alabaster text-violet py-3 mb-3">
				<p class="m-0">Signup</p>
			</a>
		@endif
	</div>
</div>
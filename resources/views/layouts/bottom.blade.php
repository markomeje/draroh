<footer class="">
	<section class="bg-smoky py-5 position-relative">
		<div class="container my-5">
			<div class="row">
				<div class="col-12 col-md-5 mb-4">
					<h1 class="text-violet mb-3">About Us</h1>
					<p class="text-white mb-4">Subrefill Offers best services in Airtime recharge, Data subscription, Cable Subscription and Electricity payment.</p>
					<div class="mb-3">
						<a href="{{ url('/signup'); }}" class="btn px-5 bg-violet btn-lg me-3 rounded-0 text-white">Signup</a>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<h1 class="text-violet mb-3">Quick Links</h1>
					<ul>
						<li class="mb-3">
							<p><a href="{{ url('/'); }}" class="text-white text-decoration-none bg-dark p-3 d-block mb-3">Home</a></p>
						</li>
						<li class="mb-3">
							<p><a href="{{ url('/about'); }}" class="text-white text-decoration-none bg-dark p-3 d-block mb-3">About</a></p>
						</li>
						<li class="mb-3">
							<p><a href="{{ url('/pricing'); }}" class="text-white text-decoration-none bg-dark p-3 d-block mb-3">Pricing</a></p>
						</li>
						<li class="mb-3">
							<p><a href="{{ url('/signup'); }}" class="text-white text-decoration-none bg-dark p-3 d-block mb-3">Signup</a></p>
						</li>
						<li class="mb-3">
							<p><a href="{{ url('/login'); }}" class="d-block text-white text-decoration-none bg-dark p-3 d-block mb-3">Login</a></p>
						</li>
					</ul>
				</div>
				<div class="col-12 col-md-4">
					<h1 class="text-violet mb-3">Contact Us</h1>
					<p class="mb-3 text-white">
						Phone: <a href="tel:08127586926" class="text-white">08127586926</a>
					</p>
					<p class="text-white">Address: No 7 Nwigwe Street, One Day, Enugu.</p>
					<p class="mb-3 text-white">
						Email: <a href="mailto:hello@subrefill.com" class="text-white">hello@subrefill.com</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="py-4 bg-violet">
		<div class="container">
			<div class="text-white m-0">&copy Copyright Subrefill {{ date('Y') === '2021' ? date('Y') : '2021 - '. date('Y') }}. Powered by Kingsbyte Technologies LTD</div>
		</div>
	</section>
</footer>

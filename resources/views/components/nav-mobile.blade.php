<div {{ $attributes->merge(['class' => '']) }}>
	<div class="navbar bg-base-100 bg-left bg-no-repeat"
		style="background-image: url('/images/img-header-bg.png');">
		<div class="navbar-start">
			{{-- Landing Link --}}
			<a href="{{ url('/') }}">
				<img class="h-12"
					src="/images/img-logo.png" />
			</a>
		</div>

		<div class="navbar-center"></div>

		<div class="navbar-end">
			@guest
				<a href="{{ url('/register') }}"
					class="btn btn-primary no-animation btn-sm text-neutral">Register</a>
			@endguest

			<button class="btn btn-primary btn-square btn-sm ml-2 text-neutral"
				@click="navOpen = ! navOpen">
				<svg xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="2.0"
					stroke="currentColor"
					class="h-6 w-6">
					<path stroke-linecap="round"
						stroke-linejoin="round"
						d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>

			</button>

		</div>
	</div>

	<div class="h-0.5 bg-neutral"></div>

	<nav x-show="navOpen"
		@click.outside="navOpen = false">
		<div class="z-10 overflow-scroll bg-neutral-900 bg-opacity-90 p-4 text-right backdrop-blur-md [&>*]:text-lg [&>hr]:my-4 [&>hr]:opacity-25">
			@guest
				<ul class="text-info">
					<li class="text-xl font-medium hover:text-accent hover:underline">
						<a href="{{ url('/login') }}">Login</a>
					</li>
				</ul>
			@endguest

			@auth
				<ul class="text-info">
					<li class="font-medium uppercase">Account</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Profile</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Character</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Inventory</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Genos</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Slots</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Plots</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Recipes, Scrolls & Books</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="#">Account Logs</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<a href="{{ url('/manage-account') }}">Manage Account</a>
					</li>
					<li class="hover:text-accent hover:underline">
						<form method="POST"
							action="{{ route('logout') }}">
							@csrf

							<x-account-nav-link :href="route('logout')"
								onclick="event.preventDefault(); this.closest('form').submit();">
								{{ __('Log Out') }}
							</x-account-nav-link>
						</form>
					</li>
				</ul>
			@endauth

			<hr />

			<ul class="text-neutral">
				<li class="font-medium uppercase">Guides</li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 2</a></li>
			</ul>

			<hr />

			<ul class="text-neutral">
				<li class="font-medium uppercase">Gameplay</li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 2</a></li>
			</ul>

			<hr />

			<ul class="text-neutral">
				<li class="font-medium uppercase">Story</li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 2</a></li>
			</ul>

			<hr />

			<ul class="text-neutral">
				<li class="font-medium uppercase">Hubs</li>
				<li><a href="#">Item 1</a></li>
				<li><a href="#">Item 2</a></li>
			</ul>

			@auth
				@if (Auth::user()->rank === 'admin')
					<li class="text-primary">
						<a href="#">Admin Dash</a>
					</li>
				@endif
			@endauth
		</div>
	</nav>
</div>

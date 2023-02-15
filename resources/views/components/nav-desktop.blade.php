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
			@auth
				<button class="btn btn-ghost btn-square btn-sm ml-2 text-neutral"
					@click="navOpen = ! navOpen">
					<svg xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						fill="currentColor"
						class="h-6 w-6">
						<path fill-rule="evenodd"
							d="M20.03 4.72a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 11.69l6.97-6.97a.75.75 0 011.06 0zm0 6a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 111.06-1.06L12 17.69l6.97-6.97a.75.75 0 011.06 0z"
							clip-rule="evenodd" />
					</svg>
				</button>
			@endauth

			@guest
				<a href="{{ url('/login') }}"
					class="btn btn-primary no-animation btn-sm bg-primary bg-opacity-25 text-primary backdrop-blur-md hover:text-neutral">Login</a>

				<a a
					href="{{ url('/register') }}"
					class="btn btn-primary no-animation btn-sm text-neutral">Register</a>
			@endguest
		</div>
	</div>

	<div class="h-0.5 bg-neutral"></div>

	@auth
		<nav id="account-nav"
			class="bg-gradient-to-r from-stone-800 to-stone-700 p-2 text-info"
			x-show="navOpen"
			@click.outside="navOpen = false">
			<div class="flex items-center justify-center gap-x-10">
				<ul tabindex="0"
					class="font-xl flex h-full max-w-lg flex-wrap items-center justify-center gap-x-4 text-center">
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

				<div class="flex items-center gap-x-2">
					<div class="text-neutral">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width=".4"
								stroke="currentColor"
								class="h-14 w-14">
								<path stroke-linecap="round"
									stroke-linejoin="round"
									d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
							</svg>
						</a>
					</div>

					<a href="#">
						<div class="online avatar m-1">
							<div class="w-10 rounded-full ring-1 ring-neutral">
								<img src="/images/img-register-2.png" />
							</div>
						</div>
					</a>

					<div class="cursor-default text-sm">
						<div>{{ Auth::user()->name }} #{{ Auth::user()->id }}</div>
						<div>Membership Rank: <span class="capitalize">{{ Auth::user()->rank }}</span></div>
					</div>
				</div>
			</div>
		</nav>
	@endauth

	<nav class="flex h-12 justify-center bg-base-100 text-neutral">
		<ul class="menu menu-horizontal self-center">
			<!-- Navbar menu content here -->
			<li>
				<label tabindex="0">Guides</label>
				<ul tabindex="0"
					class="dropdown-content menu w-52 bg-base-100">
					<li><a>Item 1</a></li>
					<li><a>Item 2</a></li>
				</ul>
			</li>
			<li>
				<label tabindex="0">Gameplay</label>
				<ul tabindex="0"
					class="dropdown-content menu w-52 bg-base-100">
					<li><a>Item 1</a></li>
					<li><a>Item 2</a></li>
				</ul>
			</li>
			<li>
				<label tabindex="0">Story</label>
				<ul tabindex="0"
					class="dropdown-content menu w-52 bg-base-100">
					<li><a>Item 1</a></li>
					<li><a>Item 2</a></li>
				</ul>
			</li>
			<li>
				<label tabindex="0">Hubs</label>
				<ul tabindex="0"
					class="dropdown-content menu w-52 bg-base-100">
					<li><a>Item 1</a></li>
					<li><a>Item 2</a></li>
				</ul>
			</li>

			@auth
				@if (Auth::user()->rank === 'admin')
					<li class="text-primary">
						<a href="#">Admin Dash</a>
					</li>
				@endif
			@endauth
		</ul>
	</nav>
</div>

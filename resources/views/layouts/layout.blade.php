<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<title>Mythika-ARPG</title>

		<!-- Scripts -->
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		<script src="js/toggle.js"></script>
	</head>
	<body class="font-sans antialiased">
		<div class="min-h-screen min-w-fit bg-base-100">
			<!-- Header -->
			<header>
				<div
					class="navbar bg-base-100 bg-left bg-no-repeat"
					style="
						background-image: url('/images/img-header-bg.png');
					"
				>
					<div class="navbar-start">
						{{-- Landing Link --}}
						<a href="{{ url('/') }}"
							><img
								class="h-12"
								src="/images/img-logo.png"
						/></a>
						{{--
						<a
							href="{{ url('/') }}"
							class="btn-link btn-sm btn text-base-100"
							>Landing</a
						>
						--}}

						{{-- Account Link --}}
						{{--
						<a
							href="{{ url('/account') }}"
							class="btn-link btn-sm btn text-base-100"
							>Account</a
						>
						--}}
					</div>

					<div class="navbar-center"></div>

					<div class="navbar-end">
						{{-- Login Button --}}
						@auth
						<form
							method="POST"
							action="{{ route('logout') }}"
						>
							@csrf

							<x-dropdown-link
								:href="route('logout')"
								onclick="event.preventDefault();
                                                this.closest('form').submit();"
							>
								{{ __("Log Out") }}
							</x-dropdown-link>
						</form>
						@endauth @guest
						<a
							href="{{ url('/login') }}"
							class="btn-outline btn-primary no-animation btn-sm btn text-neutral"
							>Login</a
						>

						{{-- Register Button --}}
						<a
							a
							href="{{ url('/register') }}"
							class="btn-primary no-animation btn-sm btn text-neutral"
							>Register</a
						>
						@endguest

						{{-- Account-Nav Toggle Button --}}
						{{--
						<button
							class="btn-ghost btn-square btn-sm btn text-neutral"
							onclick="toggle('account-nav')"
						>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 24 24"
								fill="currentColor"
								class="h-6 w-6"
							>
								<path
									fill-rule="evenodd"
									d="M20.03 4.72a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 11.69l6.97-6.97a.75.75 0 011.06 0zm0 6a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 111.06-1.06L12 17.69l6.97-6.97a.75.75 0 011.06 0z"
									clip-rule="evenodd"
								/>
							</svg>
						</button>
						--}}
					</div>
				</div>

				<div class="h-0.5 bg-neutral"></div>

				<!-- <div id="account-nav" class="navbar h-2 bg-stone-500 text-neutral" style="display: none;">
					<div class="navbar-start"></div>
					<div class="navbar-center"></div>
					<div class="navbar-end"></div>
				</div> -->

				<nav
					class="flex h-12 justify-center bg-base-100 text-neutral"
				>
					<ul class="menu menu-horizontal self-center">
						<!-- Navbar menu content here -->
						<li>
							<label tabindex="0">Guides</label>
							<ul
								tabindex="0"
								class="dropdown-content menu w-52 bg-base-100"
							>
								<li><a>Item 1</a></li>
								<li><a>Item 2</a></li>
							</ul>
						</li>
						<li>
							<label tabindex="0">Gameplay</label>
							<ul
								tabindex="0"
								class="dropdown-content menu w-52 bg-base-100"
							>
								<li><a>Item 1</a></li>
								<li><a>Item 2</a></li>
							</ul>
						</li>
						<li>
							<label tabindex="0">Story</label>
							<ul
								tabindex="0"
								class="dropdown-content menu w-52 bg-base-100"
							>
								<li><a>Item 1</a></li>
								<li><a>Item 2</a></li>
							</ul>
						</li>
						<li>
							<label tabindex="0">Hubs</label>
							<ul
								tabindex="0"
								class="dropdown-content menu w-52 bg-base-100"
							>
								<li><a>Item 1</a></li>
								<li><a>Item 2</a></li>
							</ul>
						</li>

						@auth
						<li class="text-primary">
							<a href="#">Admin Dash</a>
						</li>
						@endauth
					</ul>
				</nav>
			</header>

			<main class="bg-stone-600 text-neutral">
				<div
					class="hm-[calc(100vh-9px-2px)] flex justify-center text-neutral"
				>
					<!-- Page Content -->
					@yield('content')
				</div>
			</main>
		</div>

		<footer class="footer footer-center bg-base-100 p-2 text-neutral">
			<div>
				<p>Copyright © 2023 Mythika-ARPG</p>
			</div>
		</footer>
	</body>
</html>

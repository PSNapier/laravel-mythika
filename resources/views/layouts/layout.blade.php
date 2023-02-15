<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8" />
		<meta
				name="viewport"
				content="width=device-width, initial-scale=1"
		/>
		<meta
				name="csrf-token"
				content="{{ csrf_token() }}"
		/>

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
								style="background-image: url('/images/img-header-bg.png');"
						>
								<div class="navbar-start">
										{{-- Landing Link --}}
										<a href="{{ url('/') }}">
												<img
														class="h-12"
														src="/images/img-logo.png"
												/>
										</a>
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
																onclick="event.preventDefault(); this.closest('form').submit();"
														>
																{{ __('Log Out') }}
														</x-dropdown-link>
												</form>
												@endauth @guest
												<a
														href="{{ url('/login') }}"
														class="btn-outline btn-primary no-animation btn-sm btn text-neutral"
												>Login</a>

												{{-- Register Button --}}
												<a
														a
														href="{{ url('/register') }}"
														class="btn-primary no-animation btn-sm btn text-neutral"
												>Register</a>
										@endguest

										{{-- Account-Nav Toggle Button --}}
										<button
												class="btn-ghost btn-square btn-sm btn ml-2 text-neutral"
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
								</div>
						</div>

						<div class="h-0.5 bg-neutral"></div>

						<div
								id="account-nav"
								class="bg-gradient-to-r from-stone-800 to-stone-700 p-2 text-info"
								style="display: none"
						>
								<div class="flex justify-center gap-x-10">
										<ul
												tabindex="0"
												class="font-xl flex h-full max-w-lg flex-wrap items-center justify-center gap-x-4 text-center"
										>
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
														<a href="#">Manage Account</a>
												</li>
												<li class="hover:text-accent hover:underline">
														<a href="#">Logout</a>
												</li>
												<li class="classy class"><a href="#">Test</a></li>
										</ul>

										<div class="flex items-center gap-x-2">
												<div class="text-neutral">
														<a href="#">
																<svg
																		xmlns="http://www.w3.org/2000/svg"
																		fill="none"
																		viewBox="0 0 24 24"
																		stroke-width=".4"
																		stroke="currentColor"
																		class="h-14 w-14"
																>
																		<path
																				stroke-linecap="round"
																				stroke-linejoin="round"
																				d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
																		/>
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

												<div class="text-sm">
														<div>[Username] #[Account ID]</div>
														<div>Membership rank: [rank]</div>
												</div>
										</div>
								</div>
						</div>

						<nav class="flex h-12 justify-center bg-base-100 text-neutral">
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
						<div class="hm-[calc(100vh-9px-2px)] flex justify-center text-neutral">
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

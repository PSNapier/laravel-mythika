<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mythika-ARPG</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
		<script src="js/toggle.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen min-w-fit bg-base-100">
			<!-- Header -->
			<header>
				<div class="navbar bg-base-100 bg-left bg-no-repeat" style="background-image: url('images/img-header-bg.png');">
					<div class="navbar-start">
						{{-- Landing Link --}}
						<a href="/" class="btn btn-sm btn-link text-base-100">Landing</a>

						{{-- Account Link --}}
						<a href="/account" class="btn btn-sm btn-link text-base-100">Account</a>
					</div>

					<div class="navbar-center"></div>

					<div class="navbar-end btn-group">
						{{-- Login Button --}}
						<a href="/login" class="btn btn-sm btn-primary btn-outline text-neutral">Login</a>

						{{-- Register Button --}}
						<a a href="/register" class="btn btn-sm btn-primary text-neutral">Register</a>

						{{-- Account-Nav Toggle Button --}}
						{{-- <button class="btn btn-square btn-sm btn-ghost text-neutral" onclick="toggle('account-nav')">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
						<path fill-rule="evenodd" d="M20.03 4.72a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 11.69l6.97-6.97a.75.75 0 011.06 0zm0 6a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 111.06-1.06L12 17.69l6.97-6.97a.75.75 0 011.06 0z" clip-rule="evenodd" />
						</svg>
						</button> --}}
					</div>
				</div>

				<div class="h-0.5 bg-neutral"></div>

				<!-- <div id="account-nav" class="navbar h-2 bg-stone-500 text-neutral" style="display: none;">
					<div class="navbar-start"></div>
					<div class="navbar-center"></div>
					<div class="navbar-end"></div>
				</div> -->

				<nav class="h-9 bg-base-100 text-neutral flex justify-center">
					<ul class="menu menu-horizontal menu-compact self-center">
						<!-- Navbar menu content here -->
						<li><a href="#">Guides</a></li>
						<li><a href="#">Gameplay</a></li>
						<li><a href="#">Story</a></li>
						<li><a href="#">Hubs</a></li>
						{{-- <li class="text-primary"><a href="#">Admin Dash</a></li> --}}
					</ul>
				</nav>
			</header>

            <!-- Page Content -->
            @yield('content')
        </div>

		<footer class="footer footer-center p-2 text-neutral">
			<div>
				<p>Copyright © 2023 Mythika-ARPG</p>
			</div>
		</footer>
    </body>
</html>

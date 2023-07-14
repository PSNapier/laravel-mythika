<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1" />
	<meta name="csrf-token"
		content="{{ csrf_token() }}" />

	<title>Mythika-ARPG</title>
	<link rel="shortcut icon"
		sizes="32x32"
		href="{{ asset('images/favicon-32x32.png') }}">

	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
	<div class="min-h-screen min-w-fit bg-stone-600">
		<!-- Header -->
		<header x-data="{ navOpen: false }">
			<x-nav-mobile class="sm:hidden" />
			<x-nav-desktop class="hidden sm:block" />
		</header>

		<main class="text-neutral">
			<div class="flex justify-center text-neutral">
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

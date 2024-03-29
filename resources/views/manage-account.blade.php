@extends('layouts/layout')

@section('content')
	<main class="my-4 w-11/12 lg:w-5/6 grid grid-cols-1 lg:grid-cols-2 gap-4">
		{{-- Under Construction Warning --}}
		<div class="lg:col-span-2 text-center text-accent">🚧 Page under construction! Functionality not yet implemented. 🚧</div>

		{{-- Saves --}}
		<div class="bg-neutral [&>div]:p-2">
			<div class="bg-stone-800">{{ Auth::user()->name }}'s Saves</div>
			<div class="text-stone-800 grid grid-cols-1 gap-2">
				{{-- Banner --}}
				<div class="flex">
					<div class="w-[20%]">Banner</div>
					<div class="w-[50%] px-2 text-stone-400 rounded-md">image.png</div>
					<button class="w-[30%] ml-2 bg-stone-800 text-neutral">Upload</button>
				</div>

				{{-- Icon --}}
				<div class="flex">
					<div class="w-[20%]">Icon</div>
					<div class="w-[50%] px-2 text-stone-400 rounded-md">image.png</div>
					<button class="w-[30%] ml-2 bg-stone-800 text-neutral">Upload</button>
				</div>

				{{-- Username --}}
				<div class="flex">
					<div class="w-[20%]">Username</div>
					<input class="h-6 w-[50%] px-2 bg-white border-solid border-2 border-accent text-stone-400 rounded-md" type="text" placeholder="new username"></input>
					<button class="w-[30%] ml-2 bg-stone-800 text-neutral">Change</button>
				</div>

				{{-- Email --}}
				<div class="flex">
					<div class="w-[20%]">Email</div>
					<input class="h-6 w-[50%] px-2 bg-white border-solid border-2 border-accent text-stone-400 rounded-md" type="email" placeholder="new email"></input>
					<button class="w-[30%] ml-2 bg-stone-800 text-neutral">Update</button>
				</div>

				{{-- Password --}}
				<div class="flex">
					<div class="w-[20%]">Password</div>
					<div class="w-[50%] grid grid-cols-2 gap-1"> 
						<input class="h-6 w-full px-2 bg-white border-solid border-2 border-accent text-stone-400 rounded-md" type="password" placeholder="new"></input>
						<input class="h-6 w-full px-2 bg-white border-solid border-2 border-accent text-stone-400 rounded-md" type="password" placeholder="confirm"></input>
					</div>
					<button class="w-[30%] ml-2 bg-stone-800 text-neutral">Update</button>
				</div>

				{{-- Guilds --}}
				<div class="flex">
					<div class="w-[20%]">Guilds</div>
					<button class="w-[80%] bg-stone-800 text-neutral">Search For guilds</button>
				</div>
			</div>
		</div>

		{{-- Social Media --}}
		<div class="bg-neutral [&>div]:p-2">
			<div class="bg-stone-800">{{ Auth::user()->name }}'s Social Media <button class="float-right bg-stone-600 px-6">Save</button></div>
			<div class="text-stone-800 grid grid-cols-2 gap-2">
				@foreach (['DeviantART', 'Trello', 'Toyhouse', 'Tumblr', 'Furaffinity', 'Twitter', 'ArtStation', 'Buzzly', 'YouTube', 'PixIV'] as $link)
					<x-manage-account-links>
						{{ $link }}
					</x-manage-account-links>
				@endforeach
			</div>
		</div>

		{{-- Shops --}}
		<div class="bg-neutral [&>div]:p-2">
			<div class="bg-stone-800">{{ Auth::user()->name }}'s Shops <button class="float-right bg-stone-600 px-6">Save</button></div>
			<div class="text-stone-800 grid grid-cols-2 gap-2">
				@foreach (['Synthesis', 'Items', 'Genos', 'Runes', 'Breeding', 'Art', 'Seeds', 'Scrolls'] as $link)
					<x-manage-account-links>
						{{ $link }}
					</x-manage-account-links>
				@endforeach
			</div>
		</div>

		{{-- Featured Mythikans --}}
		<div class="bg-neutral [&>div]:p-2">
			<div class="bg-stone-800">{{ Auth::user()->name }}'s Featured Mythikans <button class="float-right bg-stone-600 px-6">Save</button></div>
			<div class="text-stone-800 text-center">
				<button class="w-3/4 bg-stone-800 text-neutral">Select Featured Mythikans...</button>
			</div>
		</div>

		{{-- Custom Box --}}
		<div class="lg:col-span-2 bg-neutral [&>div]:p-2">
			<div class="bg-stone-800">{{ Auth::user()->name }}'s Custom Box <button class="float-right bg-stone-600 px-6">Save</button></div>
			<div class="text-stone-800">
				<div>
					<div class="font-bold">HTML</div>
					<input class="w-full" type="text" placeholder="Enter HTML..."></input>
				</div>

				<div class="mt-">
					<div class="font-bold">CSS</div>
					<input class="w-full" type="text" placeholder="Enter CSS..."></input>
				</div>
			</div>
		</div>
	</main>

	{{-- Temp --}}
	{{-- <main class="min-h-screen">
		<div class="hero h-[calc(100vh-114px)] text-neutral">
			<div class="hero-content text-center">
				<div class="max-w-md">
					<h1 class="text-5xl font-bold">Manage-Account</h1>
					<p class="p-3">Temporary manage-account page for Mythika-ARPG. 🔨</p>
				</div>
			</div>
	</main> --}}
@endsection

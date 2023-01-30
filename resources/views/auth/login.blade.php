@extends('layouts/layout')

@section('content')
<main class="w-11/12 min-h-screen bg-stone-700 flex justify-center">
	<form class="mt-5 w-1/2 form-control" method="POST" action="{{ route('login') }}">
		@csrf

		<!-- Email Address -->
		<div>
			<x-input-label for="email" :value="__('Email')" />
			<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
			{{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
		</div>

		<!-- Password -->
		<div class="mt-4">
			<x-input-label for="password" :value="__('Password')" />

			<x-text-input id="password" class="block mt-1 w-full"
							type="password"
							name="password"
							required autocomplete="current-password" />

			<x-input-error :messages="$errors->get('password')" class="mt-2" />
		</div>

		<!-- Remember Me -->
		<div class="block mt-4">
			<label for="remember_me" class="inline-flex items-center">
				<input id="remember_me" type="checkbox" class="checkbox checkbox-primary focus:ring-0 focus:ring-offset-0 no-animation" name="remember">
				<span class="ml-2 text-neutral">{{ __('Remember me') }}</span>
			</label>
		</div>

		<div class="flex items-center justify-end mt-4">
			@if (Route::has('password.request'))
				<a class="underline text-neutral hover:text-primary rounded-md" href="{{ route('password.request') }}">
					{{ __('Forgot your password?') }}
				</a>
			@endif

			<x-primary-button class="ml-3">
				{{ __('Log in') }}
			</x-primary-button>
		</div>
	</form>
</main>

{{-- Temp --}}
{{-- <div class="hero h-[calc(100vh-9px-2px)] bg-stone-600 text-neutral">
	<div class="hero-content text-center">
		<div class="max-w-md">
		<h1 class="text-5xl font-bold">Login</h1>
		<p class="p-3">Temporary login page for Mythika-ARPG.</p>
	</div>
</div> --}}
@endsection

@extends('layouts/layout')

@section('content')
	<main class="flex min-h-screen w-screen justify-center bg-stone-700 sm:w-11/12">
		<form class="form-control mt-5 w-5/6 sm:w-1/2"
			method="POST"
			action="{{ route('login') }}">
			@csrf

			<!-- Session Status -->
			<x-auth-session-status class="mb-4"
				:status="session('status')" />

			<!-- Email Address -->
			<div>
				<x-input-label for="email"
					:value="__('Email')" />
				<x-text-input id="email"
					class="mt-1 block w-full"
					type="email"
					name="email"
					:value="old('email')"
					required
					autofocus />
				{{--
			<x-input-error :messages="$errors->get('email')" class="mt-2" />
			--}}
			</div>

			<!-- Password -->
			<div class="mt-4">
				<x-input-label for="password"
					:value="__('Password')" />

				<x-text-input id="password"
					class="mt-1 block w-full"
					type="password"
					name="password"
					required
					autocomplete="current-password" />

				<x-input-error :messages="$errors->get('password')"
					class="mt-2" />
			</div>

			<!-- Remember Me -->
			<div class="mt-4 block">
				<label for="remember_me"
					class="inline-flex items-center">
					<input id="remember_me"
						type="checkbox"
						class="checkbox-primary checkbox no-animation focus:ring-0 focus:ring-offset-0"
						name="remember" />
					<span class="ml-2 text-neutral">{{ __('Remember me') }}</span>
				</label>
			</div>

			<div class="mt-4 flex items-center justify-end">
				@if (Route::has('password.request'))
					<a class="rounded-md text-neutral underline hover:text-primary"
						href="{{ route('password.request') }}">
						{{ __('Forgot your password?') }}
					</a>
				@endif

				<x-primary-button class="ml-3">
					{{ __('Log in') }}
				</x-primary-button>
			</div>
		</form>
	</main>
@endsection

@extends('layouts/layout') @section('content')
<main class="min-h-screen w-11/12 flex-col bg-stone-700 p-4">
	<div class="m-auto w-1/2">
		<form method="POST" action="{{ route('password.store') }}">
			@csrf

			<!-- Password Reset Token -->
			<input
				type="hidden"
				name="token"
				value="{{ $request->route('token') }}"
			/>

			<!-- Session Status -->
			<x-auth-session-status
				class="mb-4"
				:status="session('status')"
			/>

			<!-- Email Address -->
			<div>
				<x-input-label for="email" :value="__('Email')" />
				<x-text-input
					id="email"
					class="mt-1 block w-full"
					type="email"
					name="email"
					:value="old('email', $request->email)"
					required
					autofocus
				/>
				<x-input-error
					:messages="$errors->get('email')"
					class="mt-2"
				/>
			</div>

			<!-- Password -->
			<div class="mt-4">
				<x-input-label for="password" :value="__('Password')" />
				<x-text-input
					id="password"
					class="mt-1 block w-full"
					type="password"
					name="password"
					required
				/>
				<x-input-error
					:messages="$errors->get('password')"
					class="mt-2"
				/>
			</div>

			<!-- Confirm Password -->
			<div class="mt-4">
				<x-input-label
					for="password_confirmation"
					:value="__('Confirm Password')"
				/>

				<x-text-input
					id="password_confirmation"
					class="mt-1 block w-full"
					type="password"
					name="password_confirmation"
					required
				/>

				<x-input-error
					:messages="$errors->get('password_confirmation')"
					class="mt-2"
				/>
			</div>

			<div class="mt-4 flex items-center justify-end">
				<x-primary-button>
					{{ __("Reset Password") }}
				</x-primary-button>
			</div>
		</form>
	</div>
</main>
@endsection

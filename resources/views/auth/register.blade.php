@extends('layouts/layout') @section('content')
<main
	class="grid min-h-screen w-11/12 grid-cols-3 gap-4"
	style="min-width: 810px"
>
	{{-- Register 1 --}}
	<div class="col-span-2 bg-stone-700" style="min-width: 479px">
		<img class="w-full" src="images/img-register-1.png" />

		<div class="prose max-w-full p-4 text-neutral">
			<p>
				Welcome to Mythika ARPG, an art and literature based RPG
				game, based on a Realm world filled with mythical creatures.
				We welcome you to join and see where your adventures take
				you and your Mythikans.
			</p>
			<p>
				New to ARPG's? No worries, we have complete guides of how to
				take part, gain your Mythikans, expand your guilds, go on
				adventures, and much more., don't hesitate to contact us
				about any questions in our discord!
			</p>
			<p>
				Already have old items, geno's or customs with us? Please
				don't hesitate to reach out to either the owner or manager
				to assist you!
			</p>
		</div>
	</div>

	{{-- Register 2 --}}
	<div class="bg-stone-700" style="min-width: 177.63px">
		<div class="relative" style="height: 182px">
			<div class="h-1/2 bg-stone-600"></div>
			<div class="h-1/2 bg-stone-700"></div>
			<img
				class="absolute bottom-0 left-1/2 -translate-x-1/2 transform"
				style="height: 182px"
				src="images/img-register-2.png"
			/>
		</div>

		<form class="p-4" method="POST" action="{{ route('register') }}">
			@csrf

			{{-- Name --}}
			<div>
				<x-input-label for="name" :value="__('Username')" />
				<x-text-input
					id="name"
					class="mt-1 block w-full"
					type="text"
					name="name"
					:value="old('name')"
					required
					autofocus
				/>
				<x-input-error
					:messages="$errors->get('name')"
					class="mt-2"
				/>
			</div>

			{{-- Email Address --}}
			<div class="mt-2">
				<x-input-label for="email" :value="__('Email')" />
				<x-text-input
					id="email"
					class="mt-1 block w-full"
					type="email"
					name="email"
					:value="old('email')"
					required
				/>
				<x-input-error
					:messages="$errors->get('email')"
					class="mt-2"
				/>
			</div>

			{{-- Password --}}
			<div class="mt-2">
				<x-input-label for="password" :value="__('Password')" />

				<x-text-input
					id="password"
					class="mt-1 block w-full"
					type="password"
					name="password"
					required
					autocomplete="new-password"
				/>

				<x-input-error
					:messages="$errors->get('password')"
					class="mt-2"
				/>
			</div>

			{{-- Confirm Password --}}
			<div class="mt-2">
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

			{{-- DOB --}}
			<div class="mt-2">
				<x-input-label for="dob" :value="__('Date Of Birth')" />
				<x-dob-input
					id="dob"
					class="mt-1 block w-full"
					type="date"
					name="dob"
					:value="old('dob')"
					required
				/>
				<x-input-error
					:messages="$errors->get('dob')"
					class="mt-2"
				/>
			</div>

			<div class="mt-4 flex items-center justify-end">
				<a
					class="text-neutral underline hover:text-primary"
					href="{{ route('login') }}"
				>
					{{ __("Already registered?") }}
				</a>

				<x-primary-button class="ml-4">
					{{ __("Register") }}
				</x-primary-button>
			</div>
		</form>
	</div>
</main>
@endsection

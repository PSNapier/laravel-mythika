@extends('layouts/layout') @section('content')
<main class="min-h-screen w-11/12 flex-col bg-neutral-700 p-4">
	<div class="m-auto w-1/2">
		{{-- Verify Email --}}
		<div class="text-neutral">
			{{
				__(
					"Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another."
				)
			}}
		</div>

		<div class="mt-4 text-info">
			{{
				__(
					"A new verification link has been sent to the email address you provided during registration."
				)
			}}
		</div>

		@if (session('status') == 'verification-link-sent')
		<!-- fix me -->
		@endif

		<div class="mt-4 flex items-center justify-end">
			<form method="POST" action="{{ route('logout') }}">
				@csrf

				<button
					type="submit"
					class="mr-3 text-neutral underline hover:text-primary"
				>
					{{ __("Log Out") }}
				</button>
			</form>

			<form method="POST" action="{{ route('verification.send') }}">
				@csrf

				<div>
					<x-primary-button>
						{{ __("Resend Verification Email") }}
					</x-primary-button>
				</div>
			</form>
		</div>
	</div>
</main>
@endsection

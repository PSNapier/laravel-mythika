@extends('layouts/layout')

@section('content')
	<main class="w-11/12 lg:w-5/6 bg-neutral-100 grid grid-cols-1">
		{{-- Under Construction Warning --}}
		<div class="text-center text-accent bg-neutral-600 p-4">🚧 Page under construction! Functionality not yet implemented. 🚧</div>

		{{-- Banner --}}
		<div><img class="object-fill" src="/images/img-profile-banner.webp" /></div>

		{{-- Info --}}
		<div class="m-4">
			<div class="text-neutral-800 flex flex-row">
				<img class="w-[20%]" src="/images/img-avatar.webp" />

				<div class="w-[40%]">
					<div>Username #[ID]</div>
					<div>@Username</div>
					<div>Membership Status: </div>
					<div>Admin Department</div>
				</div>

				<div class="w-[40%]">
					<div>[date] - Date Joined</div>
					<div>[date] - Date Of Birth</div>
					<div>[ID] - Santuary Taming ID</div>
					<div>[Rank] - Santuary Taming Rank</div>
				</div>
			</div>

			{{-- Page Divider --}}
			<div class="w-3/4 m-auto border-solid border-b-[1px] border-neutral-400 my-6"></div>

			{{-- Featured Mythikans --}}
			<div class="text-neutral-800">
				<div class="flex justify-between pb-4">
					<div class="font-semibold">Featured Mythikans</div>
					<div class="font-semibold underline"><a href="#">Show More...</a></div>
				</div>

				<div class="flex [&>*]:w-1/3">
					<img class="pr-4" src="/images/img-test-char.png"/>
					<img class="pr-4" src="/images/img-test-char.png"/>
					<img src="/images/img-test-char.png"/>
				</div>
			</div>

			{{-- Page Divider --}}
			<div class="w-3/4 m-auto border-solid border-b-[1px] border-neutral-400 my-6"></div>

			{{-- Custom Box & Guilds --}}
			<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
				<div class="bg-neutral [&>div]:p-2 border-solid border-[1px] border-neutral-800 lg:col-span-2">
					<div class="bg-neutral-800">Custom Box</div>
					<div class="text-neutral-800 grid grid-cols-1 gap-2">This thing all things devours...</div>
				</div>

				<div class="bg-neutral [&>div]:p-2 border-solid border-[1px] border-neutral-800">
					<div class="bg-neutral-800">Guild: [guild's name]</div>
					<div class="text-neutral-800 grid grid-cols-1 gap-2">[Username] is currently not part of any guilds.</div>
				</div>
			</div>
		</div>
	</main>
@endsection

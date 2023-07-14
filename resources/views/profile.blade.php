@extends('layouts/layout')

@section('content')
	<main class="w-11/12 lg:w-5/6 bg-stone-100 grid grid-cols-1">
		{{-- Under Construction Warning --}}
		<div class="text-center text-accent bg-stone-600 p-4">🚧 Page under construction! Functionality not yet implemented. 🚧</div>

		{{-- Banner --}}
		<div><img class="object-cover" src="/images/img-profile-banner.webp" /></div>

		{{-- Info --}}
		<div class="m-4">
			<div class="text-stone-800 flex flex-row flex-wrap justify-between gap-4">
				<div class="flex flex-row gap-4">
					<img class="h-[125px]" src="/images/img-avatar.webp" />

					<div class="pt-4">
						<div>Username #[ID]</div>
						<div>@Username</div>
						<div>Membership Status: </div>
						<div>Admin Department</div>
					</div>
				</div>

				<div class="min-w-[200px] pt-4 text-right">
					<div>[date] - Date Joined</div>
					<div>[date] - Date Of Birth</div>
					<div>[ID] - Santuary Taming ID</div>
					<div>[Rank] - Santuary Taming Rank</div>
				</div>
			</div>

			{{-- Page Divider --}}
			<div class="w-3/4 m-auto border-solid border-b-[1px] border-stone-400 my-6"></div>

			{{-- Featured Mythikans --}}
			<div class="text-stone-800">
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
			<div class="w-3/4 m-auto border-solid border-b-[1px] border-stone-400 my-6"></div>

			{{-- Custom Box & Guilds --}}
			<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
				<div class="bg-neutral [&>div]:p-2 border-solid border-[1px] border-stone-800 lg:col-span-2">
					<div class="bg-stone-800">Custom Box</div>
					<div class="text-stone-800 grid grid-cols-1 gap-2">This thing all things devours...</div>
				</div>

				<div class="bg-neutral [&>div]:p-2 border-solid border-[1px] border-stone-800">
					<div class="bg-stone-800">Guild: [guild's name]</div>
					<div class="text-stone-800 grid grid-cols-1 gap-2">[Username] is currently not part of any guilds.</div>
				</div>
			</div>
		</div>
	</main>
@endsection

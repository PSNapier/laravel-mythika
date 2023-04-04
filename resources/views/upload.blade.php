@extends('layouts/layout')

@section('content')
	<main>
		<div class="hero h-[calc(100vh-114px)] text-neutral">
			<form method="POST" action="/upload" enctype="multipart/form-data">
			@csrf
				<div>
					<lable>Thumbnail</lable>
					<input type="file" name="thumbnail" />
				</div>
				<button type="submit" class="bg-stone-900 p-2">Upload</button>
			</form>
			<img src="storage/images/test.png" class="w-[150px]" />
	</main>
@endsection

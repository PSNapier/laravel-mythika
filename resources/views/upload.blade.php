@extends('layouts/layout')

@section('content')
	<main>
		<div class="m-4 text-neutral">
			<form method="POST" action="/upload" enctype="multipart/form-data">
			@csrf
				<div>
					<lable>Thumbnail</lable>
					<input type="file" name="thumbnail" />
				</div>
				<button type="submit" class="bg-neutral-900 p-2">Upload</button>
			</form>
		</div>
		<div class="flex-column [&>*]:h-[200px]">
			@foreach(File::glob('storage/images/*') as $file)
				<img src="{{ $file }}" />
			@endforeach
		</div>
	</main>
@endsection

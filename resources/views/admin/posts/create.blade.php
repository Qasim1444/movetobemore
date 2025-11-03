@extends('layouts.base')
<base href="/public">
@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
	<h1 class="mb-6 text-2xl font-semibold text-gray-900">Create Post</h1>

	@if ($errors->any())
		<div class="mb-6 rounded-md border border-red-200 bg-red-50 p-4">
			<ul class="list-disc pl-5 text-sm text-red-700">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" class="space-y-6">
		@csrf

		<div>
			<label for="title" class="mb-1 block text-sm font-medium text-gray-700">Title</label>
			<input id="title" type="text" name="title" value="{{ old('title') }}" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
		</div>

		<div>
			<label for="description" class="mb-1 block text-sm font-medium text-gray-700">Description</label>
			<textarea id="description" name="description" rows="10" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
		</div>

		<div>
			<label for="image" class="mb-1 block text-sm font-medium text-gray-700">Image</label>
			<input id="image" type="file" name="image" accept="image/*" class="block w-full text-sm text-gray-900 file:mr-4 file:rounded-md file:border-0 file:bg-indigo-600 file:px-4 file:py-2 file:text-sm file:font-medium file:text-white hover:file:bg-indigo-500">
			<p class="mt-1 text-xs text-gray-500">Optional. JPG, PNG, GIF. Max 5MB.</p>
		</div>

		<div class="flex items-center justify-end gap-3">
			<a href="{{ route('admin.posts.index') }}" class="inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
			<button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">Save</button>
		</div>
	</form>
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('description');
</script>
@endsection
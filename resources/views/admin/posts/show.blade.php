@extends('layouts.base')
<base href="/public">
@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
	<div class="mb-6">
		<h1 class="text-3xl font-semibold text-gray-900">{{ $post->title }}</h1>

	</div>

	@if ($post->image)
		<div class="mb-6">
			<img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full max-h-[480px] rounded object-cover" />
		</div>
	@endif

	<div class="prose max-w-none prose-headings:scroll-mt-20 prose-a:text-indigo-600">
		{!! $post->description !!}
	</div>

	<div class="mt-8 flex items-center gap-3">
		<a href="{{ route('admin.posts.edit', $post) }}" class="inline-flex items-center rounded-md border border-indigo-600 px-4 py-2 text-sm font-medium text-indigo-700 hover:bg-indigo-50">Edit</a>
		<a href="{{ route('admin.posts.index') }}" class="inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Back to list</a>
	</div>
</div>
@endsection
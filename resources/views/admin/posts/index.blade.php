@extends('layouts.base')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
	<div class="flex items-center justify-between mb-6">
		<h1 class="text-2xl font-semibold text-gray-900">Posts</h1>
		<a href="{{ route('admin.posts.create') }}" class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
			+ New Post
		</a>
	</div>

	@if (session('success'))
		<div class="mb-4 rounded-md bg-green-50 p-4 text-sm text-green-700">
			{{ session('success') }}
		</div>
	@endif

	@if ($posts->count())
		<div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm">
			<table class="min-w-full divide-y divide-gray-200">
				<thead class="bg-gray-50">
					<tr>
						<th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">ID</th>
						<th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Image</th>
						<th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Title</th>
						<th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Created</th>
						<th class="px-4 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500">Actions</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-200 bg-white">
					@foreach ($posts as $post)
						<tr>
							<td class="px-4 py-3 text-sm text-gray-900">{{ $post->id }}</td>
							<td class="px-4 py-3 text-sm text-gray-900">
								@if ($post->image)
									<img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="h-10 w-10 rounded object-cover" />
								@else
									<span class="text-gray-400">—</span>
								@endif
							</td>
							<td class="px-4 py-3 text-sm text-gray-900">{{ $post->title }}</td>
					
							<td class="px-4 py-3 text-sm text-gray-700">
								<div class="flex items-center justify-end gap-2">
									<a href="{{ route('admin.posts.show', $post) }}" class="inline-flex items-center rounded-md border border-gray-300 px-3 py-1.5 text-xs font-medium text-gray-700 hover:bg-gray-50">View</a>
									<a href="{{ route('admin.posts.edit', $post) }}" class="inline-flex items-center rounded-md border border-indigo-600 px-3 py-1.5 text-xs font-medium text-indigo-700 hover:bg-indigo-50">Edit</a>
									<form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?');">
										@csrf
										@method('DELETE')
										<button type="submit" class="inline-flex items-center rounded-md border border-red-600 px-3 py-1.5 text-xs font-medium text-red-700 hover:bg-red-50">Delete</button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="mt-6">
			{{ $posts->links() }}
		</div>
	@else
		<div class="rounded-md border border-dashed border-gray-300 p-8 text-center text-gray-500">
			No posts yet.
		</div>
	@endif
</div>
@endsection
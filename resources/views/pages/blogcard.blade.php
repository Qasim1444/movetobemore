@extends('layouts.bloglayout')
@section('content')

<section class="bg-[#fdf6ef] py-16">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-gray-800 mb-2">Blog</h1>
      <p class="text-lg text-gray-600">Resources for growth in your professional life.</p>
    </div>

    <hr class="border-t border-[#dcbda6] my-8">

    @if(isset($posts) && $posts->count())
    <ul class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($posts as $post)
      <li class="flex flex-col text-center">
        <div class="overflow-hidden rounded-md mb-4">
          @php
            $imageUrl = $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/768x512?text=No+Image';
          @endphp
          <a href="{{ route('blog.show', $post) }}">
            <img src="{{ $imageUrl }}" 
                 alt="{{ $post->title }}"
                 class="w-full h-48 object-cover rounded-md">
          </a>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">
          <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
        </h3>
        <a href="{{ route('blog.show', $post) }}" class="text-gray-700 text-base mb-6 block">
          {{ \Illuminate\Support\Str::limit(strip_tags($post->description), 140) }}
        </a>
        <a href="{{ route('blog.show', $post) }}"
           class="inline-block bg-[#c38c74] text-white px-8 py-2 rounded-md uppercase tracking-wide hover:bg-[#a86e57] transition">
          Read More
        </a>
      </li>
      @endforeach
    </ul>

    <div class="mt-10">
      {{ $posts->links() }}
    </div>
    @else
      <div class="text-center text-gray-600 py-12">No posts found.</div>
    @endif
  </div>
</section>
@endsection
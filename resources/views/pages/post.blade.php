@extends('layouts.bloglayout')

@section('content')

<section class="bg-[#fdf6ef] py-16">
  <div class="max-w-3xl mx-auto px-6">
    <div class="mb-8 text-center">
      <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">{{ $post->title }}</h1>
      @if(isset($post->created_at))
      <p class="text-sm text-gray-500">{{ $post->created_at->format('F j, Y') }}</p>
      @endif
    </div>

    @php
      $imageUrl = $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/1024x576?text=No+Image';
    @endphp

    <div class="mb-8">
      <img src="{{ $imageUrl }}" alt="{{ $post->title }}" class="w-full h-auto rounded-md object-cover">
    </div>

    <article class="prose max-w-none prose-lg prose-headings:text-gray-900 prose-p:text-gray-800">
      {!! $post->description !!}
    </article>
  </div>
  
  <div class="max-w-3xl mx-auto px-6 mt-12">
    <a href="{{ url('/blog') }}" class="inline-block text-[#c38c74] hover:text-[#a86e57]">← Back to Blog</a>
  </div>
</section>

@endsection



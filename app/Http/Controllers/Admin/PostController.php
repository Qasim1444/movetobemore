<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::latest()->paginate(10);
		return view('admin.posts.index', compact('posts'));
	}

	public function create()
	{
		return view('admin.posts.create');
	}

	public function store(Request $request)
	{
        $validated = $request->validate([
			'title' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string'], // CKEditor HTML
            'image' => ['nullable', 'image', 'max:5120'], // up to 5MB
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        // Ensure slug is set
        $data['slug'] = Post::query()->make(['title' => $data['title']])->slug ?? Str::slug($data['title']);

        // Guarantee uniqueness via model generator as fallback
        $post = new Post($data);
        if (empty($post->slug)) {
            $post->slug = Str::slug($post->title);
        }
        $post->save();

		return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
	}

	public function edit(Post $post)
	{
		return view('admin.posts.edit', compact('post'));
	}

	public function update(Request $request, Post $post)
	{
        $validated = $request->validate([
			'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            // delete old image if exists
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        // If title changed, slug will be refreshed by model boot() updater
        $post->update($data);

		return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
	}

	public function destroy(Post $post)
	{
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

		return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
	}

	public function show(Post $post)
	{
		return view('admin.posts.show', compact('post'));
	}
}
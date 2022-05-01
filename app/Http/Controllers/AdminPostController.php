<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(6)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3', Rule::unique('posts', 'slug')],
            'thumbnail' => ['required', 'image'],
            'excerpt' => ['required', 'min:3'],
            'body' => ['required', 'min:3'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/posts/' . request('slug'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3', Rule::unique('posts', 'slug')->ignore($post->id)],
            'thumbnail' => ['image'],
            'excerpt' => ['required', 'min:3'],
            'body' => ['required', 'min:3'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post deleted successfully');
    }
}

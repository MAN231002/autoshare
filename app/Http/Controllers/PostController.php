<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[ 
            'posts' => Post::latest()->filter(request(['search']))->get() 
        ]);
    }

    public function show(Post $post)
    {
        $recentPosts = Post::where('user_id', $post->author->id)->latest()->take(5)->get();
        return view('post', [
            'post' => $post,
            'recentPosts' => $recentPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'description' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')], // the slug must be unique in table posts, field slug
            'brand' => 'required',
            'price' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')] // the id must exist in table categories, field id
        ]);
        
        $image = $request->file('image');

        if ($image) {
            $path = $image->store('images', 'public');
            $attributes['image'] = $path;
        } else {
            $attributes['image'] = null;
        }

        $attributes['user_id'] = auth()->id(); // add the author id

        Post::create($attributes);
        // try {
        //     Post::create($attributes);
        // } catch (\Illuminate\Database\QueryException $e) {
        //     $errorCode = $e->errorInfo[1];
        //     dd($e->getMessage(), $errorCode);
        // }

        return redirect('/');
    }

    public function manage(User $author)
    {
        // $author['username'] = auth()->user()->username; 
        return view('posts.manage', [
            'posts' => $author->posts
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $request = request();
        $attributes = $request->validate([
            'description' => 'required',
            
            // the slug must be unique in table posts, field slug. BUT ignore current slug
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            
            'brand' => 'required',
            'price' => 'required',
            
            // the id must exist in table categories, field id
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $image = $request->file('image');

        if ($image) {
            $path = $image->store('images', 'public');
            $attributes['image'] = $path;
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }


}

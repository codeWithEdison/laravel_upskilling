<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $posts = Posts::all();
        // return view('posts.index', compact('posts'));
        return response($posts);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('posts.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Posts::create($request->all());

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $post = Posts::find($id);
        return view('posts.post', compact('post'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit', compact('post'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post = Posts::find($id);
        $post->update($request->all());

        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }
}

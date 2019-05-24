<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->paginate(5);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request, Post $post)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('post.index');
    }

    public function destroy(Post $post, $id)
    {
        $post->destroy($id);

        return redirect()->route('post.index');
    }
}

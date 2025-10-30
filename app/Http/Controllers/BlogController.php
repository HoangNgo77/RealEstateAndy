<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts.
     */
    public function index()
    {
        $posts = Post::latest()
            ->where('published_at', '<=', now())
            ->where('is_published', true)
            ->paginate(10);
            
        return view('pages.blog', compact('posts'));
    }

    /**
     * Display the specified blog post.
     */
    public function show(Post $post)
    {
        if (!$post->is_published || $post->published_at > now()) {
            abort(404);
        }
        
        $recentPosts = Post::where('is_published', true)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();
            
        return view('pages.blog-detail', compact('post', 'recentPosts'));
    }
}

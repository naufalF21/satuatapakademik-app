<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class PostController extends Controller
{
    public function index()
    {
        $categories = Cache::remember('categories', now()->addDays(3), function () {
            return Category::whereHas('posts', function ($query) {
                $query->published();
            })->take(10)->get();
        });

        return view(
            'pages.articles.index',
            [
                'categories' => $categories
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'pages.articles.show',
            [
                'post' => $post
            ]
        );
    }
}

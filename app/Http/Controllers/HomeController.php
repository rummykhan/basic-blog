<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->where('is_active', true)
            ->orderBy('id', 'DESC')
            ->paginate(20);

        return view('home.index', compact('posts'));
    }

    public function showFullArticle($id, $slug)
    {
        $model = Post::query()->where('id', $id)->firstOrFail();

        return view('home.full-article', compact('model'));
    }
}

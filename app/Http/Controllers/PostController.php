<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|mixed
     */
    public function index()
    {
        $posts = Auth::user()
            ->posts()
            ->orderBy('id', 'DESC')
            ->paginate(15);

        return view('user.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPostRequest $request)
    {
        $post = new Post();
        $post->fill($request->all());
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Post is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Auth::user()
            ->posts()
            ->where('id', $id)
            ->first();

        if(!$model){
            return redirect()->route('posts.index')
                ->with('error', 'Post not found with id '.$id);
        }

        return view('user.posts.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        /** @var Post $model */
        $model = Post::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $model->fill($request->all());

        $model->save();

        return back()->with('success', 'Post is updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

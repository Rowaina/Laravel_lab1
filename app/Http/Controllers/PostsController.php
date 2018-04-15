<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditPostRequest;
use App\Http\Requests\StorePostRequest;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create', [
            'users' => $users,
        ]);
    }

    public function store(StorePostRequest $request)
    {
        Post::create(
            $request->all()
        );
        return redirect(route('posts.index'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', [
            "post" => $post,
        ]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(EditPostRequest $request)
    {

        Post::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect(route('posts.index'));
    }

    public function destory($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect(route('posts.index'));
    }
}

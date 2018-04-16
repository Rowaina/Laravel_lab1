<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Post;

class PostController extends Controller
{
    public function index(){
         $post= Post::paginate(5);
         return PostResource::collection($post);
    }

    public function store(StorePostRequest $request){

       $posts= Post::create($request->all());
       return new PostResource($post);


    }
}

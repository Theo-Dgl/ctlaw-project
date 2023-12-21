<?php

namespace App\Http\Controllers;

use App\Enums\HttpStatusCode;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function get(Request $request)
    {
        $pageSize = $request->input('pageSize', 10);


        if ($request->has('username')) {
            $user = User::where('username', $request->username)->first();
            
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
    
            $posts = $user->posts()->paginate($pageSize);
        } else {
            $posts = Post::paginate($pageSize);
        }

        return PostResource::collection($posts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::id();
        $post->save();

        return response()->json($post, HttpStatusCode::CREATED->value);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(null, HttpStatusCode::NO_CONTENT->value);
    }
}

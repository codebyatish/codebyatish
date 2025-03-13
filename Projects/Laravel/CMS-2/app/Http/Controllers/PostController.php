<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);
        return view('blog-post', ['post' => $post]);
    }

    public function create()
    {
        // $this->authorize('create', Post::class);
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        //$this->authorize('create', $post);

        $request->validate([
            'title' => 'required|min:8|max:255',
            'post_image' => 'file|mimes:jpeg,png,jpg',
            'body' => 'required'
        ]);

        if ($request->post_image) {
            $post->post_image = $request->post_image->store('images');
        }
        $user = Auth::user();
        $post->user_id = $user->id;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $result = $post->save();
        list($messageKey, $strMessage) = $result ? ['success_message', 'Post inserted successfully.'] : ['error_message', 'Unable to insert post.'];
        return redirect()->route('post.index')->with($messageKey, $strMessage);
    }

    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->paginate(5);
        // $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function edit(Post $post)
    {
        $this->authorize('view', $post);
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:8|max:255',
            'post_image' => 'file|mimes:jpeg,png,jpg',
            'body' => 'required'
        ]);

        if ($request->post_image) {
            $post->post_image = $request->post_image->store('images');
        }

        $user = Auth::user();
        $post->user_id = $user->id;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $this->authorize('update', $post);
        $result = $post->save();
        list($messageKey, $strMessage) = $result ? ['success_message', 'Post updated successfully.'] : ['error_message', 'Unable to update post.'];
        return redirect()->route('post.index')->with($messageKey, $strMessage);
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $result = $post->delete();
        list($messageKey, $strMessage) = $result ? ['success_message', 'Post was deleted.'] : ['error_message', 'Unable to delete post.'];
        return back()->with($messageKey, $strMessage);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->description == null && $request->image == null) {
            return redirect()->back()->with("msg", "Post cannot be empty.");
        }
        $post = new Post();
        $post->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/posts');
            $image->move($destinationPath, $name);
            $post->image = $name;
        }
        $post->user_id = auth()->id();
        $post->save();
        return redirect()->back()->with("success", "Post created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            return redirect()->back()->with("msg", "User not found.");
        }
        $users = User::all()->except(auth()->id())->take(5);
        $posts = Post::where('user_id', $user->id)->get();
        if ($user == auth()->user()) {
            $edit = true;
            return view('frontend.userpost', compact('user', 'users', 'posts', "edit"));
        }
        return view('frontend.userpost', compact('user', 'users', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->description == null && $request->image == null) {
            return redirect()->back()->with("msg", "Post cannot be empty.");
        }
        $post = Post::find($id);
        if ($post->user_id != auth()->id()) {
            return redirect()->back()->with("msg", "You are not authorized to edit this post.");
        }
        if ($request->description != null) {
            $post->description = $request->description;
            $post->save();
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/posts');
            $image->move($destinationPath, $name);
            $post->image = $name;
            $post->save();
        }
        return redirect()->back()->with("success", "Post updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post->user_id == auth()->id()) {
            $post->delete();
            return redirect()->back()->with("success", "Post deleted successfully.");
        }
    }
}

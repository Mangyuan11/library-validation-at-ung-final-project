<?php

namespace App\Http\Controllers;

use App\Models\UserPosts;
use Illuminate\Http\Request;

class UserPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserPosts::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_posts.create');
  
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_posts = new UserPosts();
        $request->validate([
            'user_id' => 'required',
            'title_name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'publishdate' => 'required',

        ]);
        $user_posts -> user_id = $request ['user_id'];
        $user_posts -> title_name = $request ['title_name'];
        $user_posts -> description = $request ['description'];
        $user_posts -> author = $request ['author'];
        $user_posts -> publishdate = $request ['publishdate'];
        $user_posts -> save();
        
        return redirect()->to('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPosts $userPosts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['user_posts'] = UserPosts::all();
        return view('user_posts.edit',$data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_posts = UserPosts::find($id);
        $user_posts -> user_id = $request ['user_id'];
        $user_posts -> title_name = $request ['title_name'];
        $user_posts -> description = $request ['description'];
        $user_posts -> author = $request ['author'];
        $user_posts -> ppublishdate = $request ['publishdate'];
        $user_posts -> get();

        return redirect()->to('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_posts = UserPosts::find($id);
        $user_posts->delete();

        return redirect()->to('home');
    }
}

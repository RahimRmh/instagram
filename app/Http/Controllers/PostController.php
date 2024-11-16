<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


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
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'description'=> 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif'
        ]);
        $image = $request['image']->store('posts','public') ;
        $data['image'] = $image;
        $data['slug']= str::random(10);
        // $data['user_id']=auth()->user()->id;
        // post::create($data);
        auth()->user()->posts()->create($data); 
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}

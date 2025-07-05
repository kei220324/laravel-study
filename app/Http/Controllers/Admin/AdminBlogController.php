<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogController extends Controller
{
     //ブログ一覧画面
    public function index()
    {
        return view('admin.blogs.index');
    }

   //ブログ投稿画面
    public function create()
    {
        return view('admin.blogs.create');
    }

 //ブログ投稿処理
public function store(StoreBlogRequest $request)
{
    $saveImagePath = $request->file('image')->store('blogs', 'public');

    $blog = new Blog($request->validated());
    $blog->image = $saveImagePath;
    $blog->save();

    return to_route(route:'admin.blogs.index')->with('success','ブログを投稿しました');
}

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}



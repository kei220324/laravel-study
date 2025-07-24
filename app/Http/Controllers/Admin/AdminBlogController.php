<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Cat;
use Illuminate\Support\Facades\Auth;

class AdminBlogController extends Controller
{
     //ブログ一覧画面
    public function index()
    {
        $user=Auth::user();
        $blogs=Blog::latest( 'updated_at')->simplepaginate(10);
        return view('admin.blogs.index',['blogs'=>$blogs,'user' =>$user]);
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

return to_route('admin.blogs.index')->with('success', 'ブログを投稿しました');
}

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        
    }



   //指定したIDの編集画面
    public function edit(Blog $blog)
    {
        $categories=Category::all();
        $cats=Cat::all();
       
       
       return view('admin.blogs.edit', ['blog' => $blog, 'categories' => $categories,'cats'=>$cats]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, string $id)
    {
        $blog=Blog::findOrfail($id);
      $updateData=$request->validated();
     
     //画像を変更する場合
     if($request->has('image')){
        //変更前の画像を削除
       Storage::disk('public')->delete($blog->image);
       //変更後の画像をアップロード、保存パスを更新データにセット
      $updateData['image']=$request->file('image')->store('blogs','public');
    }
  $blog->category()->associate($updateData['category_id']);
   $blog->update($updateData);

   return to_route('admin.blogs.index')->with('success' ,'ブログを更新しました');
   
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
   
        $blog=Blog:: findOrfail($id);
        $blog->delete();
        Storage::disk('public')->delete($blog->image);
        return to_route('admin.blogs.index')->with('success','ブログを削除しました');
    }
}



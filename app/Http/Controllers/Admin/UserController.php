<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\StoreUserRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

//ユーザー登録の表示
    public function create()
    {
        return view('admin.users.create');
    }

    //ユーザー登録処理
    public function store( StoreUserRequest $request)
    {
        $validated=$request ->validated();
        $validated['image']=$request->file('image')->store('users','public');
        $validated['password']=Hash::make($validated[ 'password']) ;

        User::create($validated);

      
        return back()->with('success', 'ユーザーを登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

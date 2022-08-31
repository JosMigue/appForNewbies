<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id','!=', auth()->user()->id)->get();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        return view('user.create',['user' => new User]);
    }
    public function store(UserCreateRequest $request)
    {
        User::create($request->validated());
        return back()->with('status', __(':entity has been created', ['entity' => __('user')]));
    }
    public function show($search) // This is called Model Binding 👀
    {
        $users = User::where('name','like','%'.$search.'%')->get();
        $results = View::make('components.search-results', compact('users'));
        return response($results->render());
    }
    public function edit(User $user) // This is called Model Binding 👀 x2
    {
        return view('user.create',compact('user'));
    }
    public function update(UserCreateRequest $request, User $user) // This is called Model Binding 👀 x3
    {
        $user->update($request->validated());
        return redirect()->route('users.index')->with('status', __(':entity has been updated', ['entity' => __('user')]));
    }
    public function destroy(User $user) // This is called Model Binding 👀 x4
    {
        $userCopy = $user->toJSON(); 
        $user->delete();
        return response()->json(['user'=> $userCopy]);
    }
}

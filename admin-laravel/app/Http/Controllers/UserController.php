<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
       return User::paginate(5);
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request->only('first_name' , "last_name" , 'email') + ["password"    => Hash::make($request->input('password'))]);
        return response($user , Response::HTTP_CREATED);
    }

    public function update(UserEditRequest $request , $id)
    {
        $user = User::find($id);

        $user->update($request->only('first_name' , "last_name" , 'email'));

        return response($user , Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response(null , Response::HTTP_NO_CONTENT);
    }
}

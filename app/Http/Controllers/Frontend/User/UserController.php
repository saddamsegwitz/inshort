<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        $user = User::find($request->user()->id);
        return $this->successResponse(new UserResource($user), 'User Profile Fetched Successfully', Response::HTTP_OK);
    }
}

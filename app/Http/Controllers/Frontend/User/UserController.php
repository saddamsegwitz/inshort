<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\User\UpdateProfileRequest;
use App\Models\User;
use App\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        $user = User::find($request->user()->id);
        return $this->successResponse(new UserResource($user), 'User Profile Fetched Successfully', Response::HTTP_OK);
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::find($request->user()->id);
        $data = $request->validated();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $data['avatar'] = 'noimage.png';
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $destination = "uploads/user/avatars/";
            $avatar_name = mt_rand() . "." . $avatar->getClientOriginalExtension();
            $avatar->move($destination, $avatar_name);
            $data['avatar'] = $avatar_name;
            $user->avatar = $data['avatar'];
        }
        if ($user->save()) {
            $user = new UserResource($user);
            return $this->successResponse($user, 'Profile updated successfully!', Response::HTTP_OK);
        }
        return $this->errorResponse('Something went wrong', Response::HTTP_BAD_REQUEST);
    }

    public function logout()
    {
        $token = Auth::guard('api')->user()->token();
        if ($token->revoke()) {
            return $this->successResponse('', 'Logout Successfull', Response::HTTP_OK);
        }
        return $this->errorResponse('Something went wrong', Response::HTTP_BAD_REQUEST);
    }
}

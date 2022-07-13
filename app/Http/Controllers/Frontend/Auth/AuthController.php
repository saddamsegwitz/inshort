<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\Auth\LoginRequest;
use App\Http\Requests\App\Auth\OtpVerifyRequest;
use App\Http\Requests\App\Auth\RegisterRequest;
use App\Models\User;
use App\User\UserResource;
use Carbon\Carbon;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $user = User::whereStatus(1)
            ->wherePhone($data['phone'])
            ->first();
        if (!$user) {
            return $this->errorResponse('Invalid User', Response::HTTP_UNAUTHORIZED);
        }
        $six_digit_random_number = random_int(100000, 999999);
        $user->otp = $six_digit_random_number;
        $user->otp_generated_at = Carbon::now();
        $user->save();

        $response = [
            'otp' => $user->otp,
            'phone' => $user->phone,
        ];
        return $this->successResponse($response, 'OTP Sent Successfully', Response::HTTP_OK);
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $six_digit_random_number = random_int(100000, 999999);
        $user = User::updateOrCreate([
            'phone' => $data['phone']
        ], [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'otp' => $six_digit_random_number,
            'otp_generated_at' => Carbon::now(),
        ]);
        if ($user->save()) {
            $response = [
                'otp' => $user->otp,
                'phone' => $user->phone
            ];
            return $this->successResponse($response, 'OTP Sent Successfully', Response::HTTP_CREATED);
        }
        return $this->errorResponse('Something went wrong! Please try again later', Response::HTTP_BAD_REQUEST);
    }

    public function otpVerify(OtpVerifyRequest $request)
    {
        $data = $request->validated();
        $user = User::whereStatus(1)
            ->wherePhone($data['phone'])
            ->whereOtp($data['otp'])
            ->first();
        if (!$user) {
            return $this->errorResponse('Invalid OTP or Mobile No', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $user->otp = null;
        $user->otp_generated_at = null;
        $user->save();
        $response = [
            'user' => new UserResource($user),
            'token' => $user->createToken('user-auth-token')->accessToken
        ];
        return $this->successResponse($response, 'OTP verified successfully', Response::HTTP_OK);
    }
}

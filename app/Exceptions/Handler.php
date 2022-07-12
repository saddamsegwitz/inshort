<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Throwable;
use App\Traits\ApiResponser;
use Illuminate\Http\Exceptions\ThrottleRequestsException;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (\Throwable $e, $request) {
            if (($e instanceof AccessDeniedHttpException) && $request->wantsJson()) {
                return $this->errorResponse(
                    'Unauthorized or Token expired',
                    Response::HTTP_UNAUTHORIZED
                );
            }
            if ($e instanceof ThrottleRequestsException && $request->wantsJson()) {
                return $this->errorResponse(
                    'Too many requests! try again later',
                    Response::HTTP_UNAUTHORIZED
                );
            }
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return $this->errorResponse(
                'Unauthorized or Token expired',
                Response::HTTP_UNAUTHORIZED
            );
        }
        $guard = $exception->guards()[0];
        switch ($guard) {
            case 'web':
                $login = 'auth.login';
                break;
            case 'api':
                return $this->errorResponse(
                    'Unauthorized or Token expired',
                    Response::HTTP_UNAUTHORIZED
                );
        }
        return redirect()->guest(route($login));
    }
}

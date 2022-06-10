<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\RegisterResource;
use App\Services\AuthService;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    /**
     * @param AuthRequest $request
     * @param AuthService $service
     * @return Response
     */
    public function register(AuthRequest $request, AuthService $service): Response
    {
        try {
            $user = $service->register($request->toArray());
            return $this->jsonResource(new RegisterResource($user));
        } catch ( \Exception $ex)
        {
            return $this->jsonServerError();
        }
    }
}

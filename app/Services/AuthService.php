<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * @param array $data
     * @return mixed
     */
    public function register(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' =>Hash::make($data['password'])
        ]);
    }
}

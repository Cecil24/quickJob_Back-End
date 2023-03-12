<?php

namespace App\services;

use App\Models\User;

class AuthService
{
    /**
     * @param $data
     * @return User
     */
    public function register($data): User
    {
        $user = User::create([
           'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $user;
    }
}

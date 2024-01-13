<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserInterface {

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register(array $data)
    {
        return $this->user->create($data);
    }

    public function login( $credentials )
    {
        if( Auth::attempt($credentials) )
        {
            return Auth::user();
        }

        else {
            return null;
        }
    }
}

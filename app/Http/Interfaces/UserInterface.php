<?php

namespace App\Http\Interfaces;

interface UserInterface {
    public function register (array $data);

    // public function validate_auth( string $email, string $password );

    public function login( $credentials );
}
<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private UserInterface $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    public function register_template()
    {
        return view("authentication.register");
    }

    public function register(Request $request)
    {
//        $request->validate([
//            "name" => "required",
//            "email" => "required|unique",
//            "password" => "required|min:8",
//            "phone_number" => "min:10"
//        ]);

        $user = $this->userInterface->register([
            "slug" => uniqid(),
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "phone_number" => $request->input("phone_number"),
            "password" => Hash::make($request->input("password")),
            "role_id" => 1,
        ]);

        if( Auth::attempt($request->only([ "name", "email", "password", "phone_number" ])) ) {
            return redirect("/");
        }
        else {
            return redirect("");
        }
    }

    public function login_template()
    {
        return view("authentication.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required|min:8"
        ]);

        $credentials = $request->only("email","password");

        $user = $this->userInterface->login($credentials);

        if( $user )
        {
            return redirect("/");
        }
        else
        {
            // echo "nai ken!";
            return redirect("/login");
        }
    }
}

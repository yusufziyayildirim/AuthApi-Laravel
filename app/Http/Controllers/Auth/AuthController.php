<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Http\Controllers\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(RegisterRequest $request){
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        // $token = $user->createToken($request->email)->plainTextToken;

        return Response::withoutData(true, 'Registration Success');
    }

    public function login(LoginRequest $request){
        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken($request->email)->plainTextToken;
            
            return Response::withData(true, 'Login Success', $token);
        }
        return Response::withoutData(false, 'Email or password is incorrect');
    }

    public function logged_user(){
        $loggeduser = auth()->user();
        return Response::withData(true, 'Logged User Data', $loggeduser);
    }
}

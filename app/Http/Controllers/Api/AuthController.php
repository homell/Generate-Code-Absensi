<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;

class AuthController extends Controller
{
    public function action(Request $request){
    $this->validate($request, [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'api_token' => Str::random(80),
        ]);  

        return (new UserResource($user))->additional([
            'meta' => [
                'token' => $user->api_token,
            ],
        ]);
    }
    

}

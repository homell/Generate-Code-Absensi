<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login (Request $request){
       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:8'
       ]); 
    
      if (auth()->attempt($request->only('email','password'))) {
        $makeUser = auth()->user();  

        return (new UserResource($makeUser))->additional([
            'meta' => [
                'token' => $makeUser->api_token,
            ],
        ]);

      } else {
          return response()->json([
              'data' => [
                  'status' => false,
                  'message' => 'Sorry, You cant create new user'
              ],
            ], 401);
      }
        
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\OTPmailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // login user 
   function login(Request $request){
    $validator = Validator::make(
        $request->all(),
        [
            'email' =>'required|email',
            'password' => 'required|string|min:8'
        ]
        );
     if ($validator->fails()) {
        return response()->json([
           'status' => false,
           'message' => 'validation Error',
            'error' => $validator->errors()
          ],403);
     }   
     if (auth()->attempt(['email' => $request->email , 'password' => $request->password])) {
        $user = auth()->user();
        return response()->json([
           'status' => true,
           'token' => $user->createToken('API TOKEN')->plainTextToken,
           'token_type' => 'baerer',
           'message' => 'Login Successful',
           'data' => $user
          ],200);
     }else{
        return response()->json([
           'status' => false,
           'message' => 'Invalid Credentials',
          ],201);
     }
   }

    // register user
    function register(Request $request){
      $validator = Validator::make(
        $request->all(),
        [
            'name' =>'required|string|max:255',
            'username' => 'required|lowercase',
            'email' =>'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' =>'required|string|min:10|max:15|unique:users',
            'address' =>'required|string|max:255',
        ]);

        if ($validator->fails()) {
           return response()->json([
            'status' => false,
            'message' => 'validation Error',
             'error' => $validator->errors()
           ],403);
        }

        $user = User::create([
            'full_name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    
        
       return response()->json([
           'status' => true,
           'message' => 'User registered successfully',
           'data' => $user
         ],200);

         // $responce = Mail::to($request->email)->send(new OTPmailer($request->all()));
         
    }

    
    


}

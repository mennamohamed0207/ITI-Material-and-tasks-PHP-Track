<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'email'=>'required | email',
            'password' => 'required | string ' ,
        ]);
        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        // $User->password = Hash::make($request->password);
        $user =User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        
        ]);
        $user->save();
        $token=$user->createToken('Personal Access Token')->accessToken;

        // redirect('/home');
        return response()->json(['token' => $token, 'User' => $User] , 201);
    }
    public function login(Request $request)  {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $User = User::where('email', $request->email)->first();
        if (!Auth::attempt($request->only ('email' , 'password'))){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json(['token' => $token,'User' => $user] , 201);
    }
}

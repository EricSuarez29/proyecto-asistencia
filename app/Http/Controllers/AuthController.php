<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register (Request $request){
        $response_flag = 3;
        $result = null;
        $trace = null;
        try{
            $validatedData = $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]);
    
            $validatedData['password'] = Hash::make($request->password);
            $user = User::create($validatedData);
            $profesor = new Profesor($request->all());
            $profesor->user_id = $user->id;
            $profesor->save();
            $access_token = $user->createToken('authToken')->accessToken;
            $response_flag = 1;
            $result = $access_token;
        }
        catch (\ErrorException $e) {
            $response_flag = 2;
            $result = $e->getMessage();
            $trace = $e->getTrace();
        }
        catch (\Illuminate\Database\QueryException $e) {
            $response_flag = 2;
            $result = $e->errorInfo[2];
            $trace = $e->getTrace();
        }
        finally {
            $data = [
                "response" => $result,
                "response_flag" => $response_flag,
                "trace" => $trace
            ];
            return response()->json($data, 200, [JSON_UNESCAPED_UNICODE]);
        }
    }
}

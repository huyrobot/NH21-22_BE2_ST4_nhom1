<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class RegisterService
{
    public function create($request){
        try {
            User::create([
                "name" => (string) $request->input('username'),
                "email" => (string) $request->input('email'),
                "role" => (int) $request->input('0'),
                "phone" => (string) $request->input('phone'),
                "address" => (string) $request->input('address'),
                "city" => (string) $request->input('city'),
                "password" => Hash::make((string)$request->input('password')),
            ]);
            Session::flash('success','Register success');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }
}

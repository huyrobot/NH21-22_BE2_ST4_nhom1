<?php

namespace App\Http\Services;
use App\Models\Blog;
use App\Models\User;
use Faker\Provider\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class UserService
{
    public function getAll(){
        return User::paginate(5);
    }
    public function create($request){
        try {
            User::create([
                "name" => (string) $request->input('name'),
                "email" => (string) $request->input('email'),
                "role " => (string) $request->input('0'),
                'password' => Hash::make($request->input('password')),
                //"password" => (string) $request->input('password'),
                "phone" => (string) $request->input('phone'),
                "address" => (string) $request->input('address'),
                "city" => (string) $request->input('city'),
            ]);

            Session::flash('success','Add User successful');
        }catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }

}

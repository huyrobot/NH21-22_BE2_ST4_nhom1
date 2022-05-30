<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\UserRequest;
use App\Http\Services\UserService;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function addUsers(){
        return view('admin.addmenu.insertUsers',[
            'title' => 'Add User',
            'title2' => 'Add Data',
        ]);
    }
    public function insertUsers(UserRequest $request){
        //dd($request);

        $this->userService->create($request);

        return redirect('admin/menus/listUsers');
    }
    public function updateUsers($id){
        $user = User::find($id);
        return view('admin.addmenu.updateUsers',[
            'title' => 'Update user',
            'title2' => 'Update data',
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email ,
            'password' => Hash::make($user->password),
            'phone' => $user->phone,
            'address' => $user->address,
            'city' => $user->city,
        ]);
    }
    public function updateUsersExcute(Request $request){
        $mail1 = $request->email;
        $id1 = $request->id;

        $mail2 = DB::table('users')->where('email', $mail1)->first();
        if($mail2 == null){
            if($request->name != null && $request->email != null
                && $request->password != null && $request->phone != null
                && $request->address != null && $request->city != null){
                DB::Table('users')->where('id',$request->id)
                    ->update(['name'=>$request->name,
                        'email'=>$request->email,
                        'password' => Hash::make($request->password),
                        'phone'=>$request->phone,
                        'address'=>$request->address,
                        'city'=>$request->city,
                    ]);
                Session::flash('success','Update User successfully');
                return redirect('admin/menus/listUsers');
            }
            else{
                Session::flash('error','Update User fail');

                return redirect()->back();
            }
        }

        $mailList = DB::table('users')->pluck('email');
        $a = 0;
        foreach ($mailList as $email) {
            if ($email == $mail2){
                $a++;
            }
        }
        if ($a = 0){
            if($request->name != null && $request->email != null
                && $request->password != null && $request->phone != null
                && $request->address != null && $request->city != null){
                DB::Table('users')->where('id',$request->id)
                    ->update(['name'=>$request->name,
                        'email'=>$request->email,
                        'password' => Hash::make($request->password),
                        'phone'=>$request->phone,
                        'address'=>$request->address,
                        'city'=>$request->city,
                    ]);
                Session::flash('success','Update User successfully');
                return redirect('admin/menus/listUsers');
            }
            else{
                Session::flash('error','Update User fail');

                return redirect()->back();
            }
        }
        if ($a = 1 && $mail2 != null){

           if($mail1 == $mail2->email && $id1 == $mail2->id){
               if($request->name != null && $request->email != null
                   && $request->password != null && $request->phone != null
                   && $request->address != null && $request->city != null){
                   DB::Table('users')->where('id',$request->id)
                       ->update(['name'=>$request->name,
                           'email'=>$request->email,
                           'password' => Hash::make($request->password),
                           'phone'=>$request->phone,
                           'address'=>$request->address,
                           'city'=>$request->city,
                       ]);
                   Session::flash('success','Update User successfully');
                   return redirect('admin/menus/listUsers');
               }
               else{
                   Session::flash('error','Update User fail');

                   return redirect()->back();
               }
           }
           else{
               Session::flash('error','Email already exists');
               return redirect('admin/menus/listUsers');
           }
        }
        else{
            Session::flash('error','Email already exists');
            return redirect('admin/menus/listUsers');
        }
    }
    public function destroy($id)
    {
        $users = User::find($id);

        $users->delete();
        Session::flash('success','User deleted');
        return redirect()->back();
    }
    public function showListUsers(){
        return view('admin.listmenu.listUsers',[
            'title' => 'List Users',
            'title2' => 'List',
            'users' => $this->userService->getAll(),
        ]);
    }
}

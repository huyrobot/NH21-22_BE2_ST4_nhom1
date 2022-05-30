<?php

namespace App\Http\Controllers\Admin\users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Services\RegisterService;



class RegisterControllers extends Controller
{
    protected $registerService;
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }
    public function index(){
        return view('admin.register',['title' => 'Register']);
    }
    public function insertUser(RegisterRequest $request){
        $result = $this->registerService->create($request);
        return redirect('/admin/login');

    }

}

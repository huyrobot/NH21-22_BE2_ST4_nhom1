<?php

namespace App\Http\Services;
use App\Models\HastagBlog;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class OrderService
{
    public function getAll(){
        return Order::paginate(10);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewFunction ($namePage = 'index') {
        return view($namePage);
    }
}

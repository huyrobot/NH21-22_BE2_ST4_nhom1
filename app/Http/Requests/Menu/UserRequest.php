<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Menu\ProductRequest;
use Database\Seeders\Product;
use Faker\Provider\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Services\ProductService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',

        ];
    }

}

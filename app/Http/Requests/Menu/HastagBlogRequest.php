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

class HastagBlogRequest extends FormRequest
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
            'blogID' => 'required',
            'hastagName' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'blogID.required' => 'The ID name has not been entered',
            'hastagName.required' => 'The Hastag name has not been entered',
        ];
    }
}

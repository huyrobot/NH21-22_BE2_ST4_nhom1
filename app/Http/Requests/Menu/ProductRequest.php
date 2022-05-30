<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "tenSP" => 'required',
            'giaSP' => 'required',
            'size' => 'required',
            'color' => 'required',
            'khoiLuong' => 'required',
            'tyLe' => 'required',
            'chatLieu' => 'required',
            'moTa' => 'required',
            'picture_Product' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }
    public function messages()
    {
        return [
            'tenSP.required' => 'The Product name has not been entered',
            'giaSP.required' => 'The Price has not been entered',
            'size.required' => 'The product size has not been entered',
            'color.required' => 'The Color has not been entered',
            'khoiLuong.required' => 'The Weight has not been entered',
            'tyLe.required' => 'The Dimensisons of the product has not been entered',
            'chatLieu.required' => 'The Materials of the product has not been entered',
            'moTa.required' => 'The Description of the product has not been entered',
        ];
    }
}

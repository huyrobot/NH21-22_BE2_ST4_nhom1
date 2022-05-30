<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'password' => 'min:6|required_with:passwordConfirm|same:passwordConfirm',
            'passwordConfirm' => 'min:6',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Chưa nhập Username',
            'username.max' => 'Username không được lớn hơn 25 ký tự',
            'email.required' => 'Chưa nhập Email',
            'email.unique' => 'Email này đã đăng ký',
            'phone.required' => 'Chưa nhập Số điện Thoại',
            'address.required' => 'Chưa nhập Địa chỉ',
            'city.required' => 'Chưa nhập thành phố',
            'password.required' => 'Chưa nhập mật khẩu',
            'password.same' => 'Mật khẩu xác nhận không khớp',
            'passwordConfirm.required' => 'Chưa nhập lại mật khẩu',
        ];
    }
}

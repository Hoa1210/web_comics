<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class RegisterReqest extends FormRequest
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
            'name' =>'required|string|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:50',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Họ và tên không được để trống!',
            'name.string' => 'Họ và tên không được chứa ký tự đặc biệt!',
            'name.max'  => 'Họ và tên không được dài quá 50 ký tự!',
            'email.required' => "Email không được để trống!",
            'email.unique' => "Email đã tồn tại!",
            'password.required' => "Mật khẩu không được để trống!",
            'password.max' => 'Mật khẩu không được dài quá 8 ký tự!'
        ];
    }
}

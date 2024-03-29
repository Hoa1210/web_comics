<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email nhập vào không đúng định dạng!!',
            'email.exists' => 'Email này không tồn tại!',
            'password.required' => 'Mật khẩu không được để trống!'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleSignup extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Phải nhập họ tên chứ!',
            'phone.required' => 'Phải nhập Số điện thoại chứ!',  
            'password.required' => 'Phải nhập mật khẩu chứ!',
            'password.min' => 'Mật khẩu ngắn quá, min: 6!'
        ];
    }
}

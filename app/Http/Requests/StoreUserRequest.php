<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required||string|email|unique:users',
            'name' => 'required|string',
            'user_catalogue_id' => 'required|integer|gt:0',
            'password' => 'required|string|min:6',
            're_password' => 'required|string|same:password',
            ];
    }
    
    public function messages(): array
    {
        return [
            'email.required' => 'Bạn chưa nhập vào Email',
            'email.email' => 'Email chưa đúng định dạng. Ví dụ: abc@gmail.com',
            'email.unique' => 'Email đã tồn tại. Hãy nhập Email khác',
            'name.required' => 'Bạn chưa nhập Họ và tên',
            'user_catalogue_id.gt' => 'Bạn chưa chọn Nhóm thành viên',
            'password.required' => 'Bạn chưa nhập Mật khẩu',
            're_password.required' => 'Bạn chưa Nhập lại mật khẩu',
            're_password.same' => 'Mật khẩu không khớp',
        ];
    }
    
}


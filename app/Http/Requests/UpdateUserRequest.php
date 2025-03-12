<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required||string|email|unique:users,email, '.$this->id.'',
            'name' => 'required|string',
            'user_catalogue_id' => 'required|integer|gt:0',
            
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
            
        ];
    }
}

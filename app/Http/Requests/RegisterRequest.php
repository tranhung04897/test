<?php

namespace App\Http\Requests;

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
            'fullname'=>'required',
            'email' => 'required|email',
            'password' =>'required|min:6',
            'cfpassword' =>'required|same:password|min:6',
            'address' => 'required',
            'phone' =>'required|numeric',
            'terms' =>'required',
        ];
    }
    public function messages(){
        return [
        'name.required' => 'Bắt Buộc Nhập',
        'email.required' => 'Bắt Buộc Nhập',
        'email.email' => 'Không Đúng Định Dạng Email ',
        'password.required' => 'Bắt Buộc Nhập',
        'cfpassword.required' => 'Bắt Buộc Nhập',
        'cfpassword.same' => 'Mật Khẩu Xác Nhận Không Khớp',
        'address.required' => 'Bắt Buộc Nhập',
        'phone.required' => 'Bắt Buộc Nhập',
        'phone.numeric' => 'Nhập Số',
        'terms.required' => 'Xác nhận các điều khoản và điều kiện.'
        ];
    }
}

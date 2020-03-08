<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUsersRequest extends FormRequest
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
            'phone' => 'required|min:10|max:10',
            'email' =>'required|email',
            'password' =>'required|min:6',
            'date_of_birth' =>'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống',
            'email.required' =>'Không được bỏ trống',
            'email.email' =>'Nhập sai định dạnh email',
            'password.required' =>'Không được bỏ trống',
            'password.min' =>'Không được dưới 6 ký tự',
            'date_of_birth.required' =>'Không được bỏ trống',

            'phone.required' =>'Không được bỏ trống',
            'phone.min' =>'Không được dưới 10 ký tự',
            'phone.max' =>'Không được quá 10 ký tự',

        ];
    }


}

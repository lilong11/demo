<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestorRequest extends FormRequest
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
            'name' => 'required|unique:investor|regex:/^[a-zA-Z]{1}[\w]{4,15}$/',
            'sex' => 'required',
            'phone' => 'required|regex:/^[1]{1}[3-8]{1}[\d]{9}$/',
            'email' => 'required|email'
        ];
    }

    public  function messages(){
        return [ 
        'name.required' => '姓名不能为空',
        'name.unique' => '这个名字已经被采用了',
        'name.regex' => '姓名格式不正确,要求以字母开头的5-16位',
        'sex.required' => '性别不能为空',
        'phone.required' => '手机号不能为空',
        'phone.regex' => '手机号格式不正确',
        'email.required' => '邮箱不能为空',
        'email.email' => '邮箱格式不正确'
        ];
    }
}

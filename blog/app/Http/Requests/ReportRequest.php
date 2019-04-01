<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'name' => 'required|unique:report|regex:/^[a-zA-Z]{1}[\w]{4,15}$/',
            'phone' => 'required|regex:/^[1]{1}[3-8]{1}[\d]{9}$/',
            'email' => 'required|email',
            'pic' => 'required',
            'content' => 'required'

        ];
    }

    public function messages(){
        return [
        'name.required' => '姓名不能为空',
        'name.unique' => '该用户名已被使用请重新添加',
        'name.regex' => '姓名格式不正确',
        'phone.required' => '手机号不能为空',
        'phone.regex' => '手机号格式不正确',
        'email.required' => '邮箱不能为空',
        'email.regex' => '邮箱格式不正确',
        'pic.required' => '添加图片不能为空',
        'content.required' => '说明不能为空'
        ];

    }
}

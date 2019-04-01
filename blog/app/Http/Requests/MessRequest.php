<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessRequest extends FormRequest
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
            'name' => 'required|unique:mess|regex:/^[a-zA-Z]{1}[\w]{4,15}$/',
            'phone' => 'required|regex:/^[1]{1}[3-8]{1}[\d]{9}$/',
            'mess' => 'required'
        ];
    }

    public function messages(){
        return [
        'name.required' => '姓名不能为空',
        'name.regex' => '姓名格式不正确',
        'name.unique' => '该名字已被采用请重新填写',
        'phone.required' => '手机号不能为空',
        'phone.regex' => '手机号格式不正确',
        'mess.required' => '留言内容不能为空'

        ];
    }
}

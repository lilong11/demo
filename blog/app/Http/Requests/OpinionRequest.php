<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpinionRequest extends FormRequest
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
            'name' => 'required|unique:opinion|regex:/^[a-zA-Z]{1}[\w]{4,15}$/',
            'phone' => 'required|regex:/^[1]{1}[3-8]{1}[\d]{9}$/',
            'content' =>'required'

        ];
        // return [
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'mess' => 'required'
        // ];
    }

    public function messages(){
        return[

        'name.required' => '姓名不能为空',
        'name.regex' => '姓名格式不正确',
        'name.unique' => '该用户名已被使用请重新添加',
        'phone.required' => '手机号不能为空',
        'content.required' => '意见内容不能为空'
        ];
    }
}

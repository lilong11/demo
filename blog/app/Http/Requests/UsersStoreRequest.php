<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
        // 用户表单请求验证
        return [
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{6,15}$/',
            'password' => 'required|regex:/^[\w]{6,15}$/',
            'repassword' => 'required|same:password',
            'grade' => 'required',
            'tel' => 'required|regex:/^[1]([3-9])[0-9]{9}$/',
        ];
    }


    // 提醒错误信息
    public function messages()
    {
        return [
            'uname.required' => '用户名不能为空',
            'grade.required' => '您是不是忘记选择权限了',
            'uname.regex' => '用户名格式不正确',
            'password.required' => '密码不能为空',
            'password.regex' => '密码不能少于6位',
            'repassword.required' => '确认密码不能为空',
            'repassword.same' => '俩次密码不一致',
            'repassword.tel' => '手机号不能为空',
            'tel.regex' => '手机号格式不正确',
        ];
    }
}

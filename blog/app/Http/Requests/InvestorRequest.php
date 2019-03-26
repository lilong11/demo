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
            'name' => 'required',
            'sex' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];
    }

    public  function messages(){
        return [ 
        'name.required' => '姓名不能为空',
        'sex.required' => '性别不能为空',
        'phone.required' => '手机号不能为空',
        'email.required' => '邮箱不能为空'
        ];
    }
}

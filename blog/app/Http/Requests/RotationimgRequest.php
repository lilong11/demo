<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RotationimgRequest extends FormRequest
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
            'sname' => 'required|unique:slids',
        ];
    }
    //自定义错误
    public function messages()
    {
        return [
            'sname.required' => '商品名不能为空',
            'sname.unique' => '商品名已存在',
        ];
    }
}

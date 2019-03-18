<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeStoreRequest extends FormRequest
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
            'tname' => 'required|unique:types',
        ];
    }
    //自定义错误
    public function messages()
    {
        return [
            'tname.required' => '分类名不能为空',
            'tname.unique' => '分类名已存在',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorksStoreBlogPost extends FormRequest
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
        // 文章表单请求验证
        return [
            'title' => 'required',
            'status' => 'required',
            'content' => 'required',        
            ];
    }


        // 提醒错误信息
    public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'status.required' => '请选择状态',
            'content.required' => '内容不能为空',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsStoreRequest extends FormRequest
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
            'gname' => 'required|unique:goods',
            'tid' => 'required',
            'price' => 'required|regex:/^[0-9]{1,}$/',
            'goodsDes' => 'required',
            'goodsNum' => 'required',
            'pic' => 'required',
        ];
    }
    //自定义错误
    public function messages()
    {
        return [
            'gname.required' => '商品名不能为空',
            'gname.unique' => '商品名已存在',
            'tid.required' => '商品类型不能为空',
            'price.required' => '商品价格不能为空',
            'goodsDes.required' => '商品描述不能为空',
            'goodsNum.required' => '商品数量不能为空',
            'pic.required' => '商品图片不能为空',
        ];
    }
}

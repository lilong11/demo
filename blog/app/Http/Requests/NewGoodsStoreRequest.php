<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewGoodsStoreRequest extends FormRequest
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
            'gname.required' => '最新商品名不能为空',
            'gname.unique' => '最新商品名已存在',
            'tid.required' => '最新商品类型不能为空',
            'price.required' => '最新商品价格不能为空',
            'goodsDes.required' => '最新商品描述不能为空',
            'goodsNum.required' => '最新商品数量不能为空',
            'pic.required' => '最新商品图片不能为空',
        ];
    }
}

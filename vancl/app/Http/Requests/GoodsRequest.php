<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsRequest extends FormRequest
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
            'title'=>'sometimes|required',
            'listimg'=>'sometimes|required',
            'category_id'=>'sometimes|required',
            'shichangprice'=>'sometimes|required',
            'shangchengprice'=>'sometimes|required',
            'desc'=>'sometimes|required',
            'content'=>'sometimes|required',
        ];
    }

//自定义错误消息 转成中文
       public function messages(){

        return [
            'title.required'=>'商品标题不能为空',
            'listimg.required'=>'商品列表图不能为空',
            'category_id.required'=>'请选择商品所属分类',
            'shichangprice.required'=>'商品市场价格不能为空',
            'shangchengprice.required'=>'商品商城不能为空',
            'desc.required'=>'商品描述不能为空',
            'content.required'=>'商品详情不能为空',
         ];

       }

}

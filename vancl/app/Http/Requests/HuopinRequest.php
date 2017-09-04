<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HuopinRequest extends FormRequest
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
            'kucun'=>'sometimes|required',
            'attrs'=>'sometimes|required',
        ];
    }

    //自定义错误消息 转成中文
    public function messages(){

        return [
            'kucun.required'=>'货品库存不能为空',
            'attrs.required'=>'货品属性不能为空',
        ];

    }

}

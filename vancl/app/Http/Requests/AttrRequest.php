<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttrRequest extends FormRequest
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
            'pid'=>'sometimes|required',
        ];
    }

    //自定义错误消息 转成中文
    public function messages(){

        return [
            'title.required' => '请输入商品属性名称',
            'pid.required' => '请选择父级属性',
        ];

    }

}

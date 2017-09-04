<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'catname'=>'sometimes|required',
            'description'=>'sometimes|required',
        ];
    }

    //自定义错误消息，转成中文
    public function messages()
    {
        return [
            'catname.required' => '请输入分类名称',
            'description.required' => '分类描述不能为空',
        ];
    }

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorylistRequest extends FormRequest
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
            'labelcatname'=>'sometimes|required',
            'labeldescription'=>'sometimes|required',
            'fathercategory_id'=>'sometimes|required',
            'iscommond'=>'sometimes|required',
            'ishot'=>'sometimes|required',
        ];
    }

    //自定义错误消息，转成中文
    public function messages()
    {
        return [
            'labelcatname.required' => '请输入分类标签名称',
            'labeldescription.required' => '分类标签描述不能为空',

            'fathercategory_id.required' => '必须选择父级分类',
            'iscommond.required' => '选择是否推荐',
            'ishot.required' => '选择是否热门',
        ];
    }

}

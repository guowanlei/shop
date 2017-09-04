<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Hash;
use Validator;
use Auth;
class HomeuserPasswordRequest extends FormRequest
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

//添加一条验证旧密码的规则
    public function addValide(){

        Validator::extend('check_oldpassword',function ($attribute, $value, $parameters, $validator){

            return Hash::check($value,Auth::guard('homelogin')->user()->password);

        });
    }

    public function rules()
    {

        $this->addValide();
        return [
            'oldpassword'=>'sometimes|required|check_oldpassword',
            'password'=>'sometimes|required|confirmed|between:6,20',
            'password_confirmation'=>'sometimes|required',
        ];
    }
    //自定义错误消息，转成中文
    public function messages()
    {
        return [
            'oldpassword.required' => '旧密码不能为空',
            'password.required' => '新密码不能为空',
            'password_confirmation.required' => '确认密码不能为空',
            'password.confirmed' => '两次密码输入不一致',
            'oldpassword.check_oldpassword' => '旧密码不正确',
            'password.between' => '密码必须是6-20位',
        ];
    }
}

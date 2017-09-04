<?php

namespace App\Http\Controllers\component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //上传文件
        public function uploader(Request $request){
            $file= $request->file;
            if ($file->isValid()){
                $path = $file->store(date('ymd'),'fileupload');
                //$path = $file->store(date('ymd'),'fileupload');
                return ['valid'=>1,'message'=>asset('fileupload/' . $path)];
            }
            //上传图片失败
            return ['valid'=>0,'message'=>'图片上传失败'];
        }

     public function filesLists(){

         return [ 'data' => [], 'page' => ''];

     }

}

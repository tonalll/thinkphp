<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class Ajaxsubmit extends AdminBase
{
    public function index()
    {
        return view('index');
    }
    public function save(){
            $json['message']="保存成功,这里是后台返回的提示信息！";
//            $json['closeLayer']="currentLayer";
//            $json['refreshLayer']="bbbbbbb";
        return json($json);
    }
    public function saveError(){
            $json['message']="保存成功,这里是后台返回的提示信息！";
//            $json['closeLayer']="currentLayer";
//            $json['refreshLayer']="bbbbbbb";
        return json($json,500);
    }
}

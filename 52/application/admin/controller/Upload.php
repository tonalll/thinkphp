<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class Upload extends AdminBase
{
    public function index()
    {
        return view('index');
    }
    public function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
    $file = request()->file('file');
    // 移动到框架应用根目录/public/uploads/ 目录下
    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
    if($info){
        // 成功上传后 获取上传信息
        // 输出 jpg
//        echo $info->getExtension();
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//        echo $info->getSaveName();
        // 输出 42a79759f284b767dfcb2a0197904287.jpg
//        echo $info->getFilename(); 
        $json['getExtension']=$info->getExtension();
        $json['getSaveName']=$info->getSaveName();
        $json['getFilename']=$info->getFilename();
        $json['message']='上传成功';
        return json($json);

    }else{
        // 上传失败获取错误信息
        echo $file->getError();
    }
    }
}

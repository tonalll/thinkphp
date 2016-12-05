<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class Layout extends AdminBase
{
    public function index()
    {
        return view('index');
    }
    public function creat(){
        return view();
    }
    public function save(){
        $data=input('param.');
        $result=db('layout')->insert($data);
//        dump($result);
        if($result){
            $json['message']="保存成功！";
            $json['closeLayer']="currentLayer";
            $json['refreshLayer']="layout";
        }else{
            $json['message']="保存失败！";
        }
        return json($json);
    }
    public function read(){
        $id=input('param.id');
        if(!$id){
            zxlErr('id未定义！');
        }
        $layout=db('layout')->where('id',$id)->find();
        $this->assign('layout',$layout);
        return view();
    }

    public function edit(){
        $id=input('param.id');
        if(!$id){
            zxlErr('id未定义！');
        }
        $layout=db('layout')->where('id',$id)->find();
        $this->assign('layout',$layout);
        return view();
    }
    public function update(){
        $data=input('param.');
        $result=db('layout')->update($data,['id' => $data['id']]);
//        dump($result);
        if($result){
            $json['message']="修改成功！";
            $json['closeLayer']="currentLayer";
            $json['refreshLayer']="layout";
        }else{
            $json['message']="修改失败！";
        }
        return json($json);
    }
    public function delete(){
        $id=input('param.id');
        if(!$id){
            zxlErr('请选择要删除的项！');
        }
        $result=db('layout')->where('id',$id)->delete();
        if($result){
            $json['message']="删除成功！";
            $json['refreshLayer']="layout";
        }else{
            $json['message']="删除失败！";
        }
        return json($json);
    }
}

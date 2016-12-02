<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class Student extends AdminBase
{
    public function index()
    {
//        猎取当前请求的页数
        $pageNow=input('param.pageNow');
        $pageLength=input('param.pageLength');

        $studentTotal=db('student')->select();

        $total['dataTotal']=count($studentTotal);
        $total['pageNow']=$pageNow?$pageNow:1;
        $total['pageLength']=$pageLength?$pageLength:30;
        $total['pageTotal']=$total['dataTotal']/$total['pageLength'];
        $total['pageTotal']=''?'':ceil($total['pageTotal']);
        $this->assign('total',$total);
        dump($total);


        $student=db('student')->limit($total['pageLength'])->page($total['pageNow'])->select();
        $this->assign('student',$student);
        return view('index');
    }
    public function creat(){
        return view();
    }
    public function save(){
        $data=input('param.');
        $result=db('student')->insert($data);
//        dump($result);
        if($result){
            $json['message']="保存成功！";
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
        $student=db('student')->where('id',$id)->find();
        $this->assign('student',$student);
        return view();
    }

    public function edit(){
        $id=input('param.id');
        if(!$id){
            zxlErr('id未定义！');
        }
        $student=db('student')->where('id',$id)->find();
        $this->assign('student',$student);
        return view();
    }
    public function update(){
        $data=input('param.');
        $result=db('student')->update($data,['id' => $data['id']]);
//        dump($result);
        if($result){
            $json['message']="修改成功！";
            $json['closeLayer']="currentLayer";
            $json['refreshLayer']="student";
        }else{
            $json['message']="修改失败！";
        }
        return json($json);
    }
    public function getStudent(){
        $StudentM=new StudentM();
        $student=$StudentM->all();
//        dump($student);
        return json($student);
    }
    public function delete(){
        $id=input('param.id');
        if(!$id){
            zxlErr('请选择要删除的项！');
        }
        $result=db('student')->where('id',$id)->delete();
        if($result){
            $json['message']="删除成功！";
            $json['refreshLayer']="student";
        }else{
            $json['message']="删除失败！";
        }
        return json($json);
    }
}

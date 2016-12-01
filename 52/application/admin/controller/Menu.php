<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
use app\admin\model\Menu as MenuM;
class Menu extends AdminBase
{
    public function index()
    {
        $MenuM=new MenuM();
        $menu=$MenuM->all();
        $this->assign('menu',$menu);
        return view('index');
    }
    public function creat(){
        return view();
    }
    public function save(){
        $data=input('param.');
        $MenuM=new MenuM();
        $result=$MenuM->save($data);
//        dump($result);
        if($result){
            $json['message']="保存成功！";
        }else{
            $json['message']="保存rw！";
        }
        $json['message']="保存成功！";
        return json($json);
    }
    public function read(){
        $MenuM=new MenuM();
        $main_id=input('param.main_id');
        if(!$main_id){
            zxlErr('main_id未定义！');
        }
        $menu=$MenuM->where('main_id',$main_id)->find();
        $this->assign('menu',$menu);
        return view();
    }

    public function edit(){
        $MenuM=new MenuM();
        $main_id=input('param.main_id');
        if(!$main_id){
            zxlErr('main_id未定义！');
        }
        $menu=$MenuM->where('main_id',$main_id)->find();
        $this->assign('menu',$menu);
        return view();
    }
    public function update(){
        $data=input('param.');
        $MenuM=new MenuM();
        $result=$MenuM->save($data,['main_id' => $data['main_id']]);
//        dump($result);
        if($result){
            $json['message']="修改成功！";
            $json['closeLayer']="currentLayer";
            $json['refreshLayer']="menu";
        }else{
            $json['message']="修改失败！";
        }
        return json($json);
    }
    public function getMenu(){
        $MenuM=new MenuM();
        $menu=$MenuM->all();
//        dump($menu);
        return json($menu);
    }
    public function delete(){
        $MenuM=new MenuM();
        $main_id=input('param.main_id');
        if(!$main_id){
            zxlErr('请选择要删除的项！');
        }
        $result=$MenuM::destroy(input('param.main_id'));
        if($result){
            $json['message']="删除成功！";
            $json['refreshLayer']="menu";
        }else{
            $json['message']="删除失败！";
        }
        return json($json);
    }
}

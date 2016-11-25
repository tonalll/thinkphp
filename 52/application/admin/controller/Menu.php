<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
use app\admin\model\Menu as MenuM;
class Menu extends AdminBase
{
    public function index()
    {
        return view();
    }
    public function creat(){

    }
    public function update(){

    }
    public function read(){
        $MenuM=new MenuM();
        $menu=$MenuM->all();
//        dump($menu);
        return json($menu);
    }
    public function delete(){
        echo 'delete';
    }
}

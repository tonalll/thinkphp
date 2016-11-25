<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
use app\admin\model\Aaaaaa as AaaaaaM;
class Aaaaaa extends AdminBase
{
    public function index()
    {
        echo 'admin-Menu-index';
    }
    public function creat(){

    }
    public function update(){

    }
    public function read(){
        $AaaaaaM=new AaaaaaM();
        $aaaaaa=$AaaaaaM->all();
//        dump($menu);
        return json($aaaaaa);
    }
    public function delete(){
        echo 'delete';
    }
}

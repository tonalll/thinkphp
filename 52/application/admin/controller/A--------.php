<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
use app\admin\model\A_________ as A_________M;
class A_________ extends AdminBase
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
        $A_________M=new A_________M();
        $_________a=$A_________M->all();
//        dump($menu);
        return json($_________);
    }
    public function delete(){
        echo 'delete';
    }
}

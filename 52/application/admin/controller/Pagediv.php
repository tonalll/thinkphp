<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class PageDiv extends AdminBase
{
    public function index()
    {
        return view();
        echo 'admin-Menu-index----';
    }
    public function creat(){

    }
    public function update(){

    }
    public function read(){
        return view();
    }
    public function delete(){
        echo 'delete';
    }
}

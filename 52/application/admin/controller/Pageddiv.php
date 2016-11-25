<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class Pageddiv extends AdminBase
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
      $this->fetch();
    }
    public function delete(){
        echo 'delete';
    }
}

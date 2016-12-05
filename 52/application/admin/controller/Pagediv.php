<?php
namespace app\admin\controller;
use app\common\controller\AdminBase;
class PageDiv extends AdminBase
{
    public function index()
    {
        //        猎取当前请求的页数
        $pageNow=input('param.pageNow');
        $pageLength=input('param.pageLength');


        $total['dataTotal']=1000;
        $total['pageNow']=$pageNow?$pageNow:1;
        $total['pageLength']=$pageLength?$pageLength:30;
        $total['pageTotal']=$total['dataTotal']/$total['pageLength'];
        $total['pageTotal']=''?'':ceil($total['pageTotal']);
        $this->assign('total',$total);
//        dump($total);


        return view('index');
        
        return view();
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

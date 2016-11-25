<?php
namespace app\common\controller;
use app\common\controller\Base;
class IndexBase extends  Base
{
    public function _initialize(){
        parent::_initialize();
        echo 'common-IndexBase<br/>';
    }
}


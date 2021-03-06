<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],

    // 公共模块
    'common'   =>[
        '__file__'   => [],
        '__dir__'    => [ 'controller', 'model', 'view','widget'],
        'controller' => ['Base', 'IndexBase', 'AdminBase','UserBase'],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 定义index模块的自动生成（按照实际定义的文件名生成）
    'index'   => [
        '__file__'   => ['user.php', 'hello.php'],
        '__dir__'    => ['behavior', 'controller', 'model', 'view','widget'],
        'controller' => ['Index', 'Test', 'UserType'],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 定义admin模块的自动生成
    'admin'   => [
        '__file__'   => ['user.php', 'hello.php'],
        '__dir__'    => ['behavior', 'controller', 'model', 'view','widget'],
        'controller' => ['Index', 'Test', 'UserType'],
        'model'      => [],
        'view'       => ['index/index'],
    ], 
];

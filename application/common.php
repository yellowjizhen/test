<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function dd($var, $exit = 1)
{
    header("Content-type: text/html; charset=utf-8");
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if($exit) exit;
}

function p($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
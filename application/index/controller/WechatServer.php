<?php
/**
 * Created by PhpStorm.
 * User: hjz
 * Date: 2018/8/25
 * Time: 16:45
 */

namespace app\index\controller;


use EasyWeChat\Factory;

class WechatServer
{
    public function service()
    {
        $config = [
            'app_id' => 'wx5d2028d528e20d16',
            'secret' => '50d05b77386def66c3d09ff5213a93fe',
            'token' => 'TestToken',
            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];

        $app = Factory::officialAccount($config);

        $response = $app->server->serve();
        $response->send();
    }
}
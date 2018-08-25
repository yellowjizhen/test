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
                'file' => LOG_PATH.'/wechat.log',
            ],
        ];

        $app = Factory::officialAccount($config);

        $app->server->push(function ($message) {
            return "您好！我是黄老吉";
        });

        $response = $app->server->serve();

        $response->send();
    }
}
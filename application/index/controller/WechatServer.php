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
            switch ($message['MsgType']) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
                    return '收到文字消息';
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                case 'file':
                    return '收到文件消息';
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }

            // ...
        });

        $response = $app->server->serve();

        $response->send();
    }
}
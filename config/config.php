<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2018/9/9
 * Time: 15:20
 */

return array(
    'redis' => [
        'scheme' => 'tcp',
        'host'   => '127.0.0.1',
        'port'   => 6379,
    ],
    'email' => array(
        'host'=>'smtp.163.com',
        'port'=>'25',
        'name'=>'dmail_yjc@163.com',
        'pass'=>'yuan1999',
        'from_email'=>'dmail_yjc@163.com',
        'from_name'=>'dmail_yjc',
        'mode'=>'normal'
    )
);
<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/10
 * Time: 16:46
 */
/**
 * 配置文件：
 * 定义 App_Key 和 App_Secret，还有回调地址
 */
define('WB_KEY', '982858762');
define('WB_SEC', '33706f88e4b7cbaa5bb0e0d6b0be75d6');
define('CALLBACK', 'http://weibo.yiiblog.phpzhi.com/callback.php');

function debug($array)
{
    echo '<pre>' . print_r($array, 1) . '</pre>';
}
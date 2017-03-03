<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/8
 * Time: 8:48
 *
 * QQ登录的回调代码
 */
require 'Connect2.1/qqConnectAPI.php';
require 'index.php';

//echo $_GET['code'];

//获取请求的 access_token
$oauth = new Oauth();
$access_token = $oauth->qq_callback();
//zhi($access_token);

// 获取一个用户单独的 openID
// 如果用在网站上，当有用户登录的时候，我们先去数据库读取有没有这个用户的 openID，如果有，就用这个 openID，如果没有，则把这个 openID 存到我们的数据库去
$openid = $oauth->get_openid();
//zhi($openid);

//保存这两个数据到 cookie 中，当然有效时间也可以用保存在session中的时间，session 的时间可以在qq_callback() 中找到。
setcookie('access_token', $access_token, time()+84600);
setcookie('openid', $openid, time()+84600);

header('Location: index.php');
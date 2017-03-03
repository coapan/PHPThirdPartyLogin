<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/10
 * Time: 16:56
 */
require './config.php';
require './libweibo/saetv2.ex.class.php';

// 调用 authorize 获得的 code 值
$code = $_GET['code'];

/**
 * grant_type为authorization_code时
 * code	true	string	调用authorize获得的code值。
 * redirect_uri	true	string	回调地址，需需与注册应用里的回调地址一致。
 */
/**
 * 返回数据
 *  {
 *  "access_token": "ACCESS_TOKEN",
 *  "expires_in": 1234,
 *  "remind_in":"798114",
 *  "uid":"12341234"
 * }
 */
$keys['code'] = $code;
$keys['redirect_uri'] = CALLBACK;

$o = new SaeTOAuthV2(WB_KEY, WB_SEC);
$author = $o->getAccessToken($keys);
//debug($author);
setcookie('accesstoken', $author['access_token'], time()+86400);
header('Location: index.php');
<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/10
 * Time: 16:55
 */
require './config.php';
require './libweibo/saetv2.ex.class.php';

$o = new SaeTOAuthV2(WB_KEY, WB_SEC);

// authorize接口
$author = $o->getAuthorizeURL(CALLBACK);
//print_r($author);exit;
//https://api.weibo.com/oauth2/authorize?client_id=982858762&redirect_uri=http%3A%2F%2Fweibo.yiiblog.phpzhi.com%2Fcallback.php&response_type=code
header('Location:' . $author);
<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/8
 * Time: 8:49
 */
require 'Connect2.1/qqConnectAPI.php';
require 'index.php';

$qq = new Oauth();
$qq->qq_login();

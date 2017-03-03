<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/3/3
 * Time: 17:00
 */
setcookie('access_token', null);
setcookie('openid', null);

header('Location: login.php');
<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/8
 * Time: 8:48
 */

//session_start();
function zhi($var)
{
    echo "<pre>" . print_r($var, 1) . "</pre>";
}

require 'Connect2.1/qqConnectAPI.php';

?>

<html>
<head>
    <meta charset="utf-8">
    <title>......</title>
</head>
<body>
<?php if (!isset($_COOKIE['access_token']) || !isset($_COOKIE['openid'])): ?>

    <button><a href="login.php">登录QQ</a></button>

<?php else: ?>

    <button><a href="logout.php">退出</a></button>

    <h1 style="color: red">222222222222222222222222222</h1>
    <?php
    $qc = new QC($_COOKIE['access_token'], $_COOKIE['openid']);
    $qc1 = $qc->get_user_info();
    zhi($qc1);

    ?>
    <?php endif; ?>
</body>
</html>

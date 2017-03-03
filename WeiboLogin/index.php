<?php
/**
 * Created by PhpStorm.
 * User: PanChaoZhi
 * Date: 2017/1/10
 * Time: 16:55
 */
require 'config.php';
require './libweibo/saetv2.ex.class.php';
$cookie = isset($_COOKIE['accesstoken']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>微博登录测试</title>
</head>
<body>
<?php if ($cookie): ?>
    登录成功！<a href="logout.php">退出登录</a>
    <?php
    $o = new SaeTClientV2(WB_KEY, WB_SEC, $_COOKIE['accesstoken']);
//debug($o->user_timeline_by_name());
//debug($o->comments_by_me(1, 3));
//$o->verify_nickname("SublimePan");
    print_r($o->get_uid());
    $id = $o->get_uid();
//debug($o->friends_by_id($id['uid'], 0, 5));
    $users = $o->show_user_by_id($id['uid']);
    echo "我的用户名是：" . $users['screen_name'];
    echo "<img src=" . $users['profile_image_url'] . ">";
    ?>


<?php else: ?>

    <a href="login.php"><img src="./libweibo/LOGO_48x48.png"></a>
    <br>

<?php endif; ?>

</body>
</html>

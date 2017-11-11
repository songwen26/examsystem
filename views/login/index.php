<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>后台系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <?=Html::cssFile('@web/css/reset.css')?>
    <?=Html::cssFile('@web/css/supersized.css')?>
    <?=Html::cssFile('@web/css/style.css')?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="page-container">
    <h1>登录</h1>
    <form action="<?php echo Url::toRoute(['login/index'])?>" method="post">
        <div class="mes"><span><?php echo $mes;?></span></div>
        <input type="text" name="name" class="username" placeholder="用户名">
        <input type="password" name="password" class="password" placeholder="密码">
        <button type="submit">提交</button>
    </form>
</div>
<!-- Javascript -->
<?=Html::jsFile('@web/js/jquery-1.8.2.min.js')?>
<?=Html::jsFile('@web/js/supersized.3.2.7.min.js')?>
<?=Html::jsFile('@web/js/supersized-init.js')?>
<?=Html::jsFile('@web/js/scripts.js')?>
<script type="text/javascript">
    //点击输入框后，提示信息消失
</script>
</body>
</html>

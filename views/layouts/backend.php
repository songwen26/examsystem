<?php
use yii\helpers\Url;
use yii\helpers\Html;
$session = Yii::$app->session;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>题库后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <?=Html::cssFile('@web/css/bootstrap-cerulean.min.css')?>

    <?=Html::cssFile('@web/css/charisma-app.css')?>
    <?=Html::cssFile('@web/bower_components/fullcalendar/dist/fullcalendar.css')?>
    <?=Html::cssFile('@web/bower_components/fullcalendar/dist/fullcalendar.print.css')?>
    <?=Html::cssFile('@web/bower_components/chosen/chosen.min.css')?>
    <?=Html::cssFile('@web/bower_components/colorbox/example3/colorbox.css')?>
    <?=Html::cssFile('@web/bower_components/responsive-tables/responsive-tables.css')?>
    <?=Html::cssFile('@web/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css')?>
    <?=Html::cssFile('@web/css/jquery.noty.css')?>
    <?=Html::cssFile('@web/css/noty_theme_default.css')?>
    <?=Html::cssFile('@web/css/elfinder.min.css')?>
    <?=Html::cssFile('@web/css/elfinder.theme.css')?>
    <?=Html::cssFile('@web/css/jquery.iphone.toggle.css')?>
    <?=Html::cssFile('@web/css/uploadify.css')?>
    <?=Html::cssFile('@web/css/animate.min.css')?>

    <!-- jQuery -->
    <?=Html::jsFile('@web/bower_components/jquery/jquery.min.js')?>
</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"> <?=Html::img('@web/img/logo.png')?>
            <span>题库后台</span></a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?=$session['user']['name']?></span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="<?php echo Url::toRoute(['admin/info'])?>">个人信息</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo Url::toRoute(['login/out'])?>">退出</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->
    </div>
</div>
<!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">设置管理</li>
                        <li class="accordion">
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-plus"></i><span> 管理员设置</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo Url::toRoute(['admin/list'])?>">管理员列表</a></li>
                                <li><a href="<?php echo Url::toRoute(['admin/add'])?>">添加管理员</a></li>
                            </ul>
                        </li>

                        <li class="nav-header hidden-md">客户管理</li>
                        <li><a class="ajax-link" href="<?php echo Url::toRoute(['member/list'])?>"><i
                                        class="glyphicon glyphicon-user"></i><span> 客户列表</span></a></li>
                        <li><a class="ajax-link" href="<?php echo Url::toRoute(['member/feedback'])?>"><i class=" glyphicon glyphicon-comment"></i><span> 意见反馈</span></a>
                        </li>
                        <li><a href="<?php echo Url::toRoute(['member/order'])?>"><i class="glyphicon glyphicon-lock"></i><span> 订单记录</span></a>
                        </li>

                        <li class="nav-header">题库管理</li>
                        <li class="accordion">
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-plus"></i><span> 首页分类</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo Url::toRoute(['questions/assortment'])?>">分类列表</a></li>
                                <li><a href="<?php echo Url::toRoute(['questions/classinfo'])?>">添加分类</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-plus"></i><span> 章节管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo Url::toRoute(['questions/chapterlist'])?>">章节列表</a></li>
                                <li><a href="<?php echo Url::toRoute(['questions/chapterinfo'])?>">添加章节</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a class="ajax-link" href="#"><i class="glyphicon glyphicon-plus"></i><span> 文字单选管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo Url::toRoute(['questions/radiolist'])?>">单选列表</a></li>
                                <li><a href="<?php echo Url::toRoute(['questions/radioinfo'])?>">添加单选</a></li>
                                <li><a href="<?php echo Url::toRoute(['questions/importradio'])?>">导入单选</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php echo $content?>
        </div>
        <div class="row">
            <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">

            </div>
            <div class="col-md-2 col-lg-3 col-sm-12 col-xs-12 email-subscription-footer">
                <div class="mc_embed_signup">

                </div>
                <!--End mc_embed_signup-->
            </div>
        </div>
        <hr>
        <footer class="row">
            <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                    Usman</a> 2012 - 2015</p>
            <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                        href="http://usman.it/free-responsive-admin-template">Phper</a></p>
        </footer>
</div>
<!-- external javascript -->
<?=Html::jsFile('@web/bower_components/bootstrap/dist/js/bootstrap.min.js')?>

<!-- library for cookie management -->
<?=Html::jsFile('@web/js/jquery.cookie.js')?>
<!-- calender plugin -->
<?=Html::jsFile('@web/bower_components/moment/min/moment.min.js')?>
<?=Html::jsFile('@web/bower_components/fullcalendar/dist/fullcalendar.min.js')?>
<!-- data table plugin -->
<?=Html::jsFile('@web/js/jquery.dataTables.min.js')?>
<!-- select or dropdown enhancer -->
<?=Html::jsFile('@web/bower_components/chosen/chosen.jquery.min.js')?>
<!-- plugin for gallery image view -->
<?=Html::jsFile('@web/bower_components/colorbox/jquery.colorbox-min.js')?>
<!-- notification plugin -->
<?=Html::jsFile('@web/js/jquery.noty.js')?>
<!-- library for making tables responsive -->
<?=Html::jsFile('@web/bower_components/responsive-tables/responsive-tables.js')?>
<!-- tour plugin -->
<?=Html::jsFile('@web/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js')?>
<!-- star rating plugin -->
<?=Html::jsFile('@web/js/jquery.raty.min.js')?>
<!-- for iOS style toggle switch -->
<?=Html::jsFile('@web/js/jquery.iphone.toggle.js')?>
<!-- autogrowing textarea plugin -->
<?=Html::jsFile('@web/js/jquery.autogrow-textarea.js')?>
<!-- multiple file upload plugin -->
<?=Html::jsFile('@web/js/jquery.uploadify-3.1.min.js')?>
<!-- history.js for cross-browser state change on ajax -->
<?=Html::jsFile('@web/js/jquery.history.js')?>
<!-- application script for Charisma demo -->
<?=Html::jsFile('@web/js/charisma.js')?>
</body>
</html>
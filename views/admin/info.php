<?php
use yii\helpers\Url;
use yii\helpers\Html;
$session = Yii::$app->session;
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">个人中心</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 编辑个人信息 （编辑成功需重新登录）</h2>
            </div>
            <div class="box-content">
                <form role="form" action="" method="post">
                    <input type="hidden" name="id" value="<?=$session['user']['id']?>">
                    <div class="form-group">
                        <label for="exampleInputUser1">管理员账号</label>
                        <input type="test" readonly="readonly" class="form-control" id="exampleInputUser1" placeholder="请输入用户名（3-20字符）" name="name" value="<?=$session['user']['name']?>" autofocus required pattern="^[0-9a-zA-Z]{3,50}$">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">管理员姓名</label>
                        <input type="test" class="form-control" id="exampleInputName1" placeholder="请输入姓名（最多10字符）" name="real_name" value="<?=$session['user']['real_name']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTel1">手机号</label>
                        <input type="test" class="form-control" id="exampleInputTel1" placeholder="请输入姓名（最多10字符）" name="tel" value="<?=$session['user']['tel']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">管理员密码</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请填写密码" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
        </div>
    </div>
</div><!--/row-->


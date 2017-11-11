<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">客户管理</a>
            </li>
            <li>
                <a href="#">客户列表</a>
            </li>
        </ul>
    </div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> 客户列表</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th>微信名</th>
                        <th>性别</th>
                        <th>所在地</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($list as $v):?>
                        <tr>
                            <td><?=$v['nickname']?></td>
                            <td class="center">
                                <?php if ($v['sex'] == 1):?>男
                                <?php elseif($v['sex'] == 2):?>女
                                <?php else:?>保密
                                <?php endif;?>
                            </td>
                            <td class="center"><?=$v['district'];?></td>
                            <td class="center">
                                <a class="btn btn-success" href="<?php echo Url::toRoute(['member/info', 'openid' => $v['openid']])?>">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    查看
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<?= LinkPager::widget(['pagination' => $pages]); ?>
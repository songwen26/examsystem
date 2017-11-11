<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">管理员设置</a>
            </li>
            <li>
                <a href="#">管理员列表</a>
            </li>
        </ul>
    </div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> 管理员列表</h2>

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
                        <th>管理员名</th>
                        <th>真实姓名</th>
                        <th>手机号</th>
                        <th>在职状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($list as $v):?>
                        <tr>
                            <td><?=$v['name']?></td>
                            <td class="center"><?=$v['real_name']?></td>
                            <td class="center"><?=$v['tel'];?></td>
                            <td class="center">
                                <?php if ($v['type'] == 0):?>
                                    <span class="label-success label label-default">在职</span>
                                <?php else:?>
                                    <span class="label-default label">离职</span>
                                <?php endif;?>
                            </td>
                            <td class="center">
                                <?php if ($v['type'] == 1):?>
                                    <a class="btn btn-success" href="<?php echo Url::toRoute(['admin/getinfo', 'id' => $v['id']])?>">
                                        <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                        查看
                                    </a>
                                <?php else:?>
                                    <a class="btn btn-danger" href="<?php echo Url::toRoute(['admin/del', 'id' => $v['id']])?>">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        删除
                                    </a>
                                <?php endif;?>
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
<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">题库管理</a>
        </li>
        <li>
            <a href="#">分类列表</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-tags"></i> 分类列表</h2>

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
                        <th>分类名称</th>
                        <th>图标</th>
                        <th>价格</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($list as $v):?>
                        <tr>
                            <td><?=$v['title']?></td>
                            <td class="center"><?=Html::img('@web'.$v['img'],['height'=>50,'width'=>50])?></td>
                            <td class="center"><?=$v['price']?></td>
                            <td class="center">
                                <a class="btn btn-success" href="<?php echo Url::toRoute(['questions/classinfo', 'id' => $v['id']])?>">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    编辑
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

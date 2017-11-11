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
            <a href="#">订单列表</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-lock"></i> 订单列表</h2>

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
                        <th>订单号</th>
                        <th>微信名</th>
                        <th>购买项</th>
                        <th>购买时间</th>
                        <th>失效时间</th>
                        <th>购买状态</th>
                        <th>消费金额</th>
                        <!--<th>操作</th>-->
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($list as $v):?>
                        <tr>
                            <td><?=$v['order']?></td>
                            <td><?=$v['nickname']?></td>
                            <td><?=$v['title']?></td>
                            <td class="center"><?=date('Y-m-d H:i:s',$v['start_time']);?></td>
                            <td class="center"><?=date('Y-m-d H:i:s',$v['failure_time']);?></td>
                            <td class="center">
                                <?php if ($v['type'] == 0):?>未支付
                                <?php else:?>已支付
                                <?php endif;?>
                            </td>
                            <td><?=$v['price']?></td>
                            <!--<td class="center">
                                <a class="btn btn-success" href="<?php /*echo Url::toRoute(['member/orderinfo', 'id' => $v['id']])*/?>">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    查看
                                </a>
                            </td>-->
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

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">意见反馈</a>
        </li>
        <li>
            <a href="#">反馈详情</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 客户详情</h2>
            </div>
            <div class="box-content">
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-star"></i><span> 微信名称：<?=$info['nickname']?></span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-heart"></i><span> 客户性别：
                            <?php if ($info['sex'] == 1):?>男
                            <?php elseif($info['sex'] == 2):?>女
                            <?php else:?>保密
                            <?php endif;?>
                        </span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-home"></i><span> 所在地址：<?=$info['district']?></span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-lock"></i><span> 驾校名称：<?=$info['drive_school']?></span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-comment"></i><span> 驾校名称：<?=$info['content']?></span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-time"></i><span> 反馈时间：<?=date('Y-m-d H:i:s',$info['creat_time'])?></span>
                    </li>
                    <br/>
                </ul>
            </div>
        </div>
    </div>
</div><!--/row-->
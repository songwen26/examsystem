<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">客户管理</a>
        </li>
        <li>
            <a href="#">客户详情</a>
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
                        <i class="glyphicon glyphicon-leaf"></i><span> 微信头像：<a href="<?=$info['headimgurl']?>"><img src="<?=$info['headimgurl']?>" height="50" width="50"/></a></span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-user"></i><span> 真实姓名：<?=$info['realname']?></span>
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
                        <i class="glyphicon glyphicon-bookmark"></i><span> 身份证号：<?=$info['user_id']?></span>
                    </li>
                    <br/>
                    <li>
                        <i class="glyphicon glyphicon-lock"></i><span> 驾校名称：<?=$info['drive_school']?></span>
                    </li>
                    <br/>
                </ul>
            </div>
        </div>
    </div>
</div><!--/row-->



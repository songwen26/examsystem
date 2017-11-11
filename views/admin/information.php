<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">管理员详情</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 管理员信息</h2>
            </div>
            <div class="box-content">
                <form role="form" action="" method="post">
                    <input type="hidden" name="id" value="<?=$info['id']?>">
                    <div class="form-group">
                        <label for="exampleInputUser1">管理员账号</label>
                        <input type="test" readonly="readonly" class="form-control" id="exampleInputUser1" placeholder="请输入用户名（3-20字符）" name="name" value="<?=$info['name']?>" autofocus required pattern="^[0-9a-zA-Z]{3,50}$">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">管理员姓名</label>
                        <input type="test" readonly="readonly" class="form-control" id="exampleInputName1" placeholder="请输入姓名（最多10字符）" name="real_name" value="<?=$info['real_name']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTel1">手机号</label>
                        <input type="test" readonly="readonly" class="form-control" id="exampleInputTel1" placeholder="请输入姓名（最多10字符）" name="tel" value="<?=$info['tel']?>" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/row-->

<?php
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">题库管理</a>
        </li>
        <li>
            <a href="#">分类详情</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 分类详情</h2>
            </div>
            <div class="box-content">
                <form role="form" action="" method="post" enctype="multipart/form-data" >
                    <input type="hidden" value="<?=$info['id']?>" name="id"/>
                    <div class="form-group">
                        <label for="exampleInputTitle1">分类名称</label>
                        <input type="test" class="form-control" id="exampleInputTitle1" placeholder="请输入分类名" name="title" value="<?=$info['title']?>" required>
                    </div>
                    <input type="hidden" value="<?=$info['img']?>" name="img"/>
                    <div class="form-group">
                        <label for="exampleInputFile">上传图标</label>
                        <input type="file" id="exampleInputFile" name="file" <?php if (!$info['id']):?>required<?php endif;?>>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice1">分类价格</label>
                        <input type="test" class="form-control" id="exampleInputPrice1" placeholder="请输入价格" name="price" value="<?=$info['price']?>" required>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
        </div>
    </div>
</div><!--/row-->

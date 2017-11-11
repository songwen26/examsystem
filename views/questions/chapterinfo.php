<?php
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">题库管理</a>
        </li>
        <li>
            <a href="#">章节详情</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 章节详情</h2>
            </div>
            <div class="box-content">
                <form role="form" action="" method="post" enctype="multipart/form-data" >
                    <input type="hidden" value="<?=$info['id']?>" name="id"/>
                    <input type="hidden" value="<?=$info['cid']?>" name="cid"/>
                    <div class="control-group">
                        <label class="control-label" for="selectError2">分类名称</label>

                        <div class="controls">
                            <select data-placeholder="选择分类名称" id="selectError2" data-rel="chosen" name="cid" required>
                                <option value=""></option>
                                <optgroup label="分类">
                                    <?php foreach($assortment as $v):?>
                                        <?php if ($info['cid'] == $v['id']):?>
                                            <option value="<?=$v['id']?>" selected = "selected"><?=$v['title']?></option>
                                        <?php else:?>
                                            <option value="<?=$v['id']?>"><?=$v['title']?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputChapter">章节名称</label>
                        <input type="test" class="form-control" id="exampleInputTitle1" placeholder="请输入章节名称" name="chapter" value="<?=$info['chapter']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice1">章节排序</label>
                        <input type="test" class="form-control" id="exampleInputSort" placeholder="请输入顺序（正序展示）" name="sort" value="<?=$info['sort']?>" required>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
        </div>
    </div>
</div><!--/row-->

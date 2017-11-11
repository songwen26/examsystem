<?php
/**
 * 章节表
 */
namespace app\models;

use Yii;
class Chapter extends Base{
    //查询章节详情
    public function getInfo($id){
        return Chapter::find()
            ->select(['id','cid','chapter','sort'])
            ->where(['id'=>$id])
            ->asArray()
            ->one();
    }
    //修改章节详情
    public function updateInfo($data){
        $model = Chapter::find()->where(['id'=>$data['id']])->one();
        $model->cid = $data['cid'];
        $model->chapter = $data['chapter'];
        $model->sort = $data['sort'];
        return $model->save();
    }
    //新增章节
    public function addInfo($data){
        $model = new Chapter();
        $model->cid = $data['cid'];
        $model->chapter = $data['chapter'];
        $model->sort = $data['sort'];
        $model->save();
        return $model->primaryKey;
    }
}
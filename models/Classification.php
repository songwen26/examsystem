<?php
/**
 * 首页分类表
 */
namespace app\models;

use Yii;
class Classification extends Base{
    //分类列表（首页展示）
    public function getList(){
        return Classification::find()
            ->select(['id','img','title','price'])
            ->asArray()
            ->all();
    }

    //获取分类详情
    public function getInfo($id){
        return Classification::find()
            ->select(['id','img','title','price'])
            ->where(['id'=>$id])
            ->asArray()
            ->one();
    }

    //创建分类
    public function addInfo($data){
        $model = new Classification();
        $model->img = $data['img'];
        $model->title = $data['title'];
        $model->price = $data['price'];
        $model->save();
        return Yii::$app->db->getLastInsertID();
    }

    //编辑分类
    public function updateInfo($data){
        $model = Classification::find()->where(['id' =>  $data['id']])->one();
        $model->img = $data['img'];
        $model->title = $data['title'];
        $model->price = $data['price'];
        return $model->save();
    }
}
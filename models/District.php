<?php
/**
 * 地区表
 */
namespace app\models;

use Yii;
class District extends Base{

    //获取地址名称
    public function getName($id){
        $name = District::find()->select(['name'])->where(['id'=>$id])->asArray()->one();
        return $name['name'];
    }

}
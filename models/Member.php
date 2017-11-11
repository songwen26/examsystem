<?php
/**
 * 用户表
 */
namespace app\models;
use Yii;
class Member extends Base{

    //客户列表
    public function getList(){
        return Member::find()->select(['nickname','sex','provinceid','cityid','areaid','openid'])->asArray()->all();
    }

    //客户详情
    public function getInfo($openId){
        return Member::find()->select(['headimgurl','drive_school','user_id','realname','nickname','sex','provinceid','cityid','areaid','openid'])->where(['openid'=>$openId])->asArray()->one();
    }
}
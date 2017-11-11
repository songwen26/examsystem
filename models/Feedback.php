<?php
/**
 * 意见反馈表
 */
namespace app\models;
use Yii;
class Feedback extends Base{

    //反馈详情
    public function getInfo($id){
        return Feedback::find()
            ->select(['f.content','f.creat_time','m.nickname','m.sex','f.id','m.provinceid','m.cityid','m.areaid','m.openid','m.drive_school'])
            ->from('system_feedback AS f')
            ->leftJoin('system_member AS m','f.openid = m.openid')
            ->where(['f.id'=>$id])
            ->OrderBy(['f.creat_time'=>SORT_DESC])
            ->asArray()
            ->one();
    }

}
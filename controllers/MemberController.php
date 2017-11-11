<?php
namespace app\controllers;

use Yii;
use app\models\Member;
use app\models\Order;
use app\models\District;
use app\models\Feedback;
use yii\data\Pagination;
class MemberController extends BaseController{
    //客户列表
    public function actionList(){
        $page = $this->pageSize;
        $data = Member::find()->select(['nickname','sex','provinceid','cityid','areaid','openid']);
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->asArray()->all();
        foreach ($list as $k=>$v){
            $district = $this->getDistrict($v);
            $list[$k]['district'] = $district;
        }
        return $this->render('list',array('list'=>$list,'pages'=>$pages));
    }
    //客户详情
    public function actionInfo($openid=""){
        $model = new Member();
        $info = $model->getInfo($openid);
        $info['district'] = $this->getDistrict($info);
        //查询做题数，错题数等

       return $this->render('info',array('info'=>$info));
    }

    //意见反馈列表
    public function actionFeedback(){
        $page = $this->pageSize;
        $data = Feedback::find()->select(['f.content','f.creat_time','m.nickname','m.sex','f.id'])->from('system_feedback AS f')->leftJoin('system_member AS m','f.openid = m.openid');
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->OrderBy(['f.creat_time'=>SORT_DESC])->asArray()->all();
        return $this->render('feedback',array('list'=>$list,'pages'=>$pages));
    }
    //意见详情
    public function actionFeedinfo($id){
        $model = new Feedback();
        $info = $model->getInfo($id);
        $info['district'] = $this->getDistrict($info);
        return $this->render('feedinfo',array('info'=>$info));
    }

    //购买记录表
    public function actionOrder(){
        $page = $this->pageSize;
        $data = Order::find()
            ->select(['o.id','o.type','o.order','o.price','o.start_time','o.failure_time','c.title','m.nickname'])
            ->from('system_order AS o')
            ->leftJoin('system_member AS m','o.openid = m.openid')
            ->leftJoin('system_classification AS c','o.cid = c.id');
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->OrderBy(['o.start_time'=>SORT_DESC])->asArray()->all();
        return $this->render('order',array('list'=>$list,'pages'=>$pages));
    }
}
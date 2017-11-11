<?php
namespace app\controllers;

use Yii;
use app\models\Admin;
use yii\data\Pagination;

class AdminController extends BaseController{
    //首页
    public function actionIndex(){
        return $this->render('index');
    }

    //管理员列表页
    public function actionList(){
        $page = $this->pageSize;
        $data = Admin::find()->select(['id','name','real_name','tel','type']);
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->OrderBy(['id'=>SORT_DESC])->asArray()->all();
        return $this->render('list',array('list'=>$list,'pages'=>$pages));
    }

    //修改个人信息
    public function actionInfo(){
        $request = Yii::$app->request;
        $post = $request->post();
        if($post){
            $model = new Admin();
            $info = $model->updateInfo($post);
            if ($info){
                return $this->redirect(['login/out']);
            }else{
                return $this->render('info');
            }
        }else{
            return $this->render('info');
        }
    }

    //查看管理员详情
    public function actionGetinfo($id = ""){
        $model = new Admin();
        $list = $model->getInof($id);
        return $this->render('information',array('info'=>$list));
    }

    //删除员工
    public function actionDel($id){
        $model = new Admin();
        $model->delUser($id);
        return $this->redirect(['admin/list']);
    }

    //添加管理员
    public function actionAdd(){
        $request = Yii::$app->request;
        $post = $request->post();
        if ($post){
            $admin = new Admin();
            $id = $admin->addUser($post);
            if ($id){
                return $this->redirect(['admin/list']);
            }else{
                return $this->render('add',array('mes'=>'添加失败'));
            }
        }else{
            return $this->render('add',array('mes'=>''));
        }
    }

}
<?php
namespace app\controllers;

use app\models\Admin;
use Yii;

class LoginController extends BaseController{
    public function actionIndex(){

        $session = Yii::$app->session;
        $request = Yii::$app->request;
        $post = $request->post();
        if ($session['user'])
            return $this->render('@app/views/admin/index.php');
        if ($post){
            $model = new Admin();
            $info = $model->loginIn($post);
            if ($info['id']){
                $session['user'] = [
                    'id'    =>  $info['id'],
                    'name'  =>  $info['name'],
                    'real_name' =>  $info['real_name'],
                    'tel'   =>  $info['tel']
                ];
                //将信息放入cookie
                $cookie = new \yii\web\Cookie([
                    'name'  =>  'userinfo',
                    'value' =>  $info
                ]);
                \Yii::$app->response->getCookies()->add($cookie);
                //跳转到后台首页
                return $this->render('@app/views/admin/index.php');
            }
        }else{
            return $this->renderPartial('index',array('mes'=>''));
        }
    }

    //退出操作
    public function actionOut(){
        //删除session
        $session = Yii::$app->session;
        $session->remove('user');

        //删除cookie
        $cookie = Yii::$app->request->cookies->get('userinfo');
        \Yii::$app->response->getCookies()->remove($cookie);

        return $this->redirect(['login/index']);
    }

}
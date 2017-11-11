<?php
namespace app\controllers;

use app\models\Classification;
use app\models\District;
use yii\web\Controller;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use Yii;
class BaseController extends Controller{
    protected $request;
    protected $session;
    protected $post;
    public $pageSize = 10;
    protected $upload_path = "D:/phpStudy/WWW/examsystem/web/img/upload/"; //上传文件的存放路径

    public function beforeAction($action)
    {
        $this->session = Yii::$app->session;
        $url = \Yii::$app->request;
        if ($this->session['user']){
            return $this->request=\Yii::$app->request;
        }else{
            if ($url->url == '/examsystem/web/index.php?r=login' or $url->url == '/examsystem/web/' or $url->url == '/examsystem/web/index.php?r=login/index'){
                return $this->request=\Yii::$app->request;
            }else{
                $this->redirect(['index.php/login']);
            }
            $this->redirect(['login/index']);
        }
    }

    public function getDistrict($data){
        $modle = new District();
        $province = $modle->getName($data['provinceid']);
        $city = $modle->getName($data['cityid']);
        $area = $modle->getName($data['areaid']);
        $district = $province." ".$city." ".$area;
        return $district;
    }

    //上传图片
    public function uploaddify($file){
        $name = $file['name'];
        $type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
        $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
        //判断文件类型是否被允许上传
        if(!in_array($type, $allow_type)){
            //如果不被允许，则直接停止程序运行
            return 400;
        }
        //判断是否是通过HTTP POST上传的
        if(!is_uploaded_file($file['tmp_name'])){
            //如果不是通过HTTP POST上传的
            return 402;
        }
        $newname = date('YmdHisu',time());
        $path = $this->upload_path.$newname.'.'.$type;
        //开始移动文件到相应的文件夹
        if(move_uploaded_file($file['tmp_name'],$path)){
            return '/img/upload/'.$newname.'.'.$type;
        }else{
            return 500;
        }
    }

    //查询所有分类
    public function getAssortment(){
        return Classification::find()
            ->select(['id','title'])
            ->asArray()
            ->all();
    }

}
<?php
namespace app\controllers;

use app\models\Chapter;
use app\models\Classification;
use app\models\Radio;
use Yii;
use yii\data\Pagination;
class QuestionsController extends BaseController{
    //首页分类列表
    public function actionAssortment(){
        $modle = new Classification();
        $list = $modle->getList();
        return $this->render('classlist',array('list'=>$list));
    }

    //添加编辑分类
    public function actionClassinfo($id = ''){
        $info = [
            'id'    =>  '',
            'img'   =>  '',
            'title' =>  '',
            'price' =>  ''
        ];
        $request = Yii::$app->request;
        $post = $request->post();
        $modle = new Classification();
        if ($post){
            $data = [
                'title' =>  $post['title'],
                'price' =>  $post['price']
            ];
            if ($_FILES['file']['size'] != 0){
                //上传方法（写着公共方法里）
                $file = $this->uploaddify($_FILES['file']);

                $data['img'] = $file;
            }else{
                $data['img'] = $post['img'];
            }
            //编辑分类
            if ($post['id']){
                $data['id'] = $post['id'];
                $modle->updateInfo($data);
            }else{//添加分类
                $modle->addInfo($data);
            }
            return $this->redirect(['questions/assortment']);
        }else{
            if ($id){
                $info = $modle->getInfo($id);
            }
        }
        return $this->render('classinfo',array('info'=>$info));
    }

    //章节列表
    public function actionChapterlist(){
        $page = $this->pageSize;
        $data = Chapter::find()
            ->select(['l.title','h.chapter','h.id','h.sort'])
            ->from('system_chapter AS h')
            ->leftJoin('system_classification AS l','h.cid = l.id');
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->OrderBy(["h.cid"=>SORT_ASC,"h.sort"=>SORT_ASC])->asArray()->all();
        return $this->render('chapterlist',array('list'=>$list,'pages'=>$pages));
    }

    //章节详情
    public function actionChapterinfo($id = ''){
        $request = Yii::$app->request;
        $post = $request->post();
        $info = [
            'id'    =>  '',
            'chapter'   =>  '',
            'cid'   =>  '',
            'sort'  =>  ''
        ];
        //查询所有分类
        $assortment = $this->getAssortment();
        $model = new Chapter();
        if ($post){
            $info['cid'] = $post['cid'];
            $info['chapter'] = $post['chapter'];
            $info['sort'] = $post['sort'];
            if ($post['id']){
                //修改
                $info['id'] = $post['id'];
                $model->updateInfo($info);
            }else{
                //新增
                $model->addInfo($info);
            }
            return $this->redirect(['questions/chapterlist']);
        }
        if ($id) $info = $model->getInfo($id);
        return $this->render('chapterinfo',array('info'=>$info,'assortment'=>$assortment));
    }

    //文字单选题列表
    public function actionRadiolist(){
        $page = $this->pageSize;
        $data = Radio::find()
            ->select(['r.title','h.chapter','r.id','r.mandatory','class'=>'l.title','h.cid'])
            ->from('system_radio AS r')
            ->leftJoin('system_chapter AS h','r.zid = h.id')
            ->leftJoin('system_classification AS l','h.cid = l.id');
        $pages = new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page]);
        $list = $data->offset($pages->offset)->limit($pages->limit)->OrderBy(["id"=>SORT_DESC])->asArray()->all();
        return $this->render('radiolist',array('list'=>$list,'pages'=>$pages));
    }

    //文字单选详情
    public function actionRadioinfo($id = ''){
        $request = Yii::$app->request;
        $post = $request->post();
        $info = [
            'id'    =>  '',
            'chapter'   =>  '',
            'class' =>  '',
            'cid'   =>  '',
            'sort'  =>  ''
        ];
    }

    //上传单选题库
    public function actionImportradio(){

    }

}
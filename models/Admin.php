<?php
namespace app\models;

use Yii;
//后台管理员表
class Admin extends Base{
    //字段验证
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['real_name'], 'string', 'max' => 10]
        ];
    }

    //管理员登录
    public function loginIn($data){
        $cond = [
            'name'      =>  $data['name'],
            'password'  =>  md5($data['password']),
            'type'      =>  0
        ];
        $info = $this::find()->select(['id', 'name', 'real_name', 'tel'])->where($cond)->one();
        return $info;
    }

    //修改管理员信息
    public function updateInfo($data){
        $admin = Admin::find()->where(['id' =>  $data['id']])->one();
        $admin->name = $data['name'];
        $admin->real_name = $data['real_name'];
        $admin->password = md5($data['password']);
        $admin->tel = $data['tel'];
        return $admin->save();
    }

    //删除用户
    public function delUser($id){
        $admin = Admin::find()->where(['id'=>$id])->one();
        $admin->type = 1;
        $admin->save();
    }

    //新增管理员
    public function addUser($data){
        $admin = new Admin();
        $admin->name = $data['name'];
        $admin->real_name = $data['real_name'];
        $admin->password = md5($data['password']);
        $admin->tel = $data['tel'];
        $admin->save();
        return $admin->primaryKey;
    }

    //查看管理员详情
    public function getInof($id = '')
    {
        if (!empty($id)){
            //单个管理员信息
            return Admin::find()->select(['id','name','real_name','tel','type'])->where(['id'=>$id])->asArray()->one();
        }else{
            //管理员列表
            return Admin::find()->select(['id','name','real_name','tel','type'])->asArray()->all();
        }
    }

}

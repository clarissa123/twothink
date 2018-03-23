<?php
namespace app\admin\controller;
use think\Controller;
use app\common\api\Uc;
use think\Db;

class Repair extends Admin
{
   //列表————配置
    public $model_info = [
        'default'=>[
            'meta_title' => '维修管理',
            //表单提交地址
            'url' => 'updates',
            //特殊字符串替换用于列表定义解析
            'replace_string' => [['[DELETE]','[EDIT]'],['delete?ids=[uid]','edit?id=[uid]']],
            //按钮组
            'button'     => [
                ['title'=>'新增','url'=>'add','icon'=>'','class'=>'ajax-get iframe btn-success','ExtraHTML'=>''],
            ],
            //表名
            'name' => 'repair',
            'pk' => 'id',
            'list_grid'  => 'sn:报修单号;name:报修人;tel:电话;title:标题;content:报修内容;address:地址;uid:操作:[status]|{0.修改.edit&uid=[uid] 1.禁用.changestatus?method=forbidUser&uid=[uid] -1.假删除},repair/edit?id=[id]|修改,repair/del?id=[id]|删除 ',
        ],
        'index'=>['url'=>'Repair/index'],
        'add'=>[
            'meta_title' => '新增导航',
            'url' => 'add',
        ],
    ];

    //列表
//    public function index(){
//        //实例化Repair模型
//        $repair = model('Repair');
//        $list = $repair->select();
////        $list   = Db::query('select * from `repair`');
////        $list = Db::name('repair')->select();
//        //分配数据到页面
////        $this->assign('index',$list);
//        //显示页面
//        return $this->fetch('index',['list'=>$list]);
//
//    }

    //添加
    public function add(){
        $request = $this->request;
        if($request->isPost()){
            $post = $_POST;
            $str = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
            $post['sn'] = substr(str_shuffle($str),26,10);
            $result = Db::table('twothink_repair')->insert($post);
            if($result){
                return $this->success('添加成功！');
            }else{
                return $this->error('添加失败！');
            }
        }
        return $this->fetch('add');
    }

    //修改
    public function edit($id){
        $row = Db::name('repair')->find(['id'=>$id]);
//        var_dump($row);die;
        $request = $this->request;
        if ($request->isPost()){
            //var_dump($request->isPost());
            $post = $request->post();

            $res = Db::table('twothink_repair')->where(['id'=>$id])->update($post);
            if ($res){
                $this->success('修改成功！','repair/index');
            }else{
                $this->error('修改失败！');
            }
        }
        $this->assign('row',$row);
        return $this->fetch();
    }

    //删除
    public function del($id){
        Db::table('twothink_repair')->where('id',$id)->delete();
        $this->success('删除成功！','repair/index');
    }

}
<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    //页面跳转
    public function index()
    {
        $this->display();
    }


    //返回json
    public function getInfo(){
        header("Access-Control-Allow-Origin:*");
        $user = M('user');
        $obj = $user->field(true)->select();
        $data = array(
            code => '1',
            data => $obj
        );

        $this->ajaxReturn($data);
    }


    public  function addUser(){
        $args = I('post.');
        $user = M('user');
        $user->add($args);
        $this->assign('name', $args);
        $this->display();
    }

    public  function delUser(){
        $id = I('get.id');
        $user = M('user');
        $user->delete($id);
        $this->display('/index/index');
    }
}
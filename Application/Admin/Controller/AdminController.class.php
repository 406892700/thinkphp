<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/5
 * Time: 10:01
 */



namespace Admin\Controller;
use Think\Controller;


class AdminController extends Controller{
    //跳转
    public function login(){
        $this->display();
    }

//    public function dashboard(){
//        $this->assign('user',session('user'));
//        $this->display();
//    }

    //广告管理
    public function adManage(){
        $ads = M('ad');
        $adlist = $ads->select();
        $this->assign('adlist',$adlist);
        $this->assign('user',session('user'));
        $this->assign('tab','_ad');
        $this->display();
    }

    //广告编辑
    public function editAd(){
        $id = I('get.id');
        $ad = M('ad')->where(array(
            id => $id
        ))->select();

        $ad['duration'] =
        $this->assign('ad',$ad[0]);
        $this->assign('tab','_ad');
        $this->display();
    }

    //文章管理
    public function articleManage(){
        $article = M('article');
        $articlelist = $article->select();
        $this -> assign('articlelist',$articlelist);
        $this->assign('tab','_article');
        $this->display();
    }

    //文章编辑
    public function editArticle(){
        $this->assign('tab','_article');
        $this->display();
    }

    //公告管理
    public function noticeManage(){
        $this->assign('tab','_notice');
        $this->display();
    }

    //公告编辑
    public function editNotice(){
        $this->assign('tab','_notice');
        $this->display();
    }

    //轮播管理
    public function slideManage(){
        $this->assign('tab','_slide');
        $this->display();
    }

    //轮播编辑
    public function editSlide(){
        $this->assign('tab','_slide');
        $this->display();
    }

    //联系人管理
    public function personManage(){
        $this->assign('tab','_person');
        $this->display();
    }

    //联系人编辑
    public function editPerson(){
        $this->assign('tab','_person');
        $this->display();
    }

    //统计管理
    public function statisticManage(){
        $this->assign('tab','_statistic');
        $this->display();
    }

    //统计编辑
    public function editStatistic(){
        $this->assign('tab','_statistic');
        $this->display();
    }

    //文章管理接口
    public function editAdDetail(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->success('上传成功！');
        }
    }

    //json接口
    public function apiLogin(){
        $username = I('post.username');
        $password = I('post.password');
        $admin = M('admin');
        $obj = $admin -> where('username=\''.$username.'\' AND password=\''.$password.'\'')->select();
        if(sizeof($obj) == 0){
            $data = array(
                code => '-1',
                data => '',
                msg => '账号或密码输入错误！'
            );
        }else{
            $data = array(
                code => '1',
                data => $obj,
                msg => '登录成功！'
            );

            session('user',$obj);
        }

        $this->ajaxReturn($data);
    }
}
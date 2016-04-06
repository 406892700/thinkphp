<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/5
 * Time: 10:01
 */



namespace Admin\Controller;
use Think\Controller;


class PublicController extends Controller{

    public function header(){
        $this->assign('user',session('user'));
        $this->display();
    }

    public function footer(){
        $this->display();
    }

}
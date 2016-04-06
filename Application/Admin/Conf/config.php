<?php
return array(
    'ADMIN_ROOT' => 'http://localhost/think/thinkphp/index.php',//系统工程路径
	//'配置项'=>'配置值'
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'thinkPHP', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
    'MAX_SIZE'  => 3145728,//上传文件大小限制
    'EXTS'      => array('jpg', 'gif', 'png', 'jpeg'),//可以上传的文件类型
    'ROOT_PATH' => './Upload/',//上传文件夹
    'SAVE_PATH' => ''//设置附件上传（子）目录
);
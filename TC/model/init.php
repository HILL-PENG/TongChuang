<?php

date_default_timezone_set('PRC'); 

if(empty($_SESSION)){
   	session_start();
}


$_M = empty($_GET['mot']) ? 'home':$_GET['mot'];  // 模块

$_C = empty($_GET['ctl']) ? 'index':$_GET['ctl'];  //控制器文件

$_A = isset($_GET['act']) ? $_GET['act'] :'index' ;  //控制视图文件

//初始化 路径 文件夹
define('M_MOT',$_M);
define('C_CTL',$_C);
define('A_ACT',$_A);

define('DS','/');
define('CONTROLLER','controller/');
define('MODEL','model/');
define('VIEW','view/');
define('PH','.php');
define('HT','.html');
// define('PU','public'.DS);
define('PU','public'.DS.$_M.DS);

//数据库连接参数
// define('HOST','121.40.34.175');
// define('ROOT_NAME','49344_fr6451');
// define('ROOT_PASS','5DbZB63JTiIJrJb');
// define('DBNAME','49344dbMmqIp');
define('HOST','127.0.0.1');
define('ROOT_NAME','root');
define('ROOT_PASS','root');
define('DBNAME','tc');
define('CHARSET_NAME','utf8');

if(M_MOT == 'admin' && C_CTL != 'login'){
	if (empty($_SESSION['id'])) {//未登录不能直接访问后台主页，并直接跳转登录界面
		header("Location: index.php?mot=admin&ctl=login"); 
	}
}


include('db.php');

include('mysqli.php');

conn();

include MODEL.'upload'.PH; 

include MODEL.'function'.PH; 
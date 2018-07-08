<?php 
$ctl=$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
$result = select_list($mysqli,$sql);

$id = empty($_GET['id']) ? 67 : $_GET['id'];

$sql1 = 'select * from menu where m_pid=66';
$result1 = select_list($mysqli,$sql1);

$sql2 = 'select * from prod where p_type='.$id;
$result2 = select_list($mysqli,$sql2);
//var_dump($result2);die;
// include MODEL.'page'.PH;

$num = count($result2, 0);//获取数据数组条数
$tiao = 6;//设置显示条数据
$page_num = ceil($num/$tiao);//总页数

$page = empty($_GET['page']) ? 1 : $_GET['page'];//获取当前所在页

if($_POST){
	$page = $_POST['page'];
	if($page>$page_num){
		$page=$page_num;
	}elseif ($page<1) {
		$page = 1;
	}
}
// var_dump($page);
$qishi = ($page-1)*$tiao;//当前页起始值
$sql_dangqian = "select * from prod where p_type=$id order by p_id desc limit $qishi,$tiao";//查询当前页所有数据
// var_dump($page);
$result_dangqian = select_list($mysqli,$sql_dangqian);

include CONTROLLER.$_M.DS.'common'.PH;


<?php 
$ctl=$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "product" limit 3';
$result = select_list($mysqli,$sql);

$id = empty($_GET['id']) ? 67 : $_GET['id'];



$key =$_POST['key'];

$sql2="select * from prod where p_name like '%$key%' order by p_id desc"; 

$result2 = select_list($mysqli,$sql2);

// var_dump($result2);die;

$num = count($result2, 0);//获取数据数组条数
$tiao = 6;//设置显示条数据
$page_num = ceil($num/$tiao);//总页数

$page = empty($_POST['page']) ? 1 : $_POST['page'];//获取当前所在页


if($_POST){
	if($page>$page_num){
		$page=$page_num;
	}elseif ($page<1) {
		$page = 1;
	}
}

$qishi = ($page-1)*$tiao;//当前页起始值
$sql_dangqian = "select * from prod where p_name like '%$key%'  order by p_id desc limit $qishi,$tiao";//查询当前页所有数据
// var_dump($page);
$result_dangqian = select_list($mysqli,$sql_dangqian);
// var_dump($result_dangqian);

include CONTROLLER.$_M.DS.'common'.PH;

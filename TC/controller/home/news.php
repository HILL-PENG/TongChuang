<?php 

$ctl=$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
$result = select_list($mysqli,$sql);



$id = empty($_GET['id']) ? 63 : $_GET['id'];

$sql3 = 'select * from menu where m_pid=62'; 
$result3 = select_list($mysqli,$sql3);
// var_dump($result3);die;

$sql1 = 'select * from news where n_type ='.$id;
$result1 = select_list($mysqli,$sql1);


$num = count($result1, 0);//获取数据数组条数
$tiao = 4;//设置显示条数据
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

$qishi = ($page-1)*$tiao;//当前页起始值
$sql_dangqian = "select * from news where n_type=$id order by n_id desc limit $qishi,$tiao";//查询当前页所有数据
$result_dangqian = select_list($mysqli,$sql_dangqian);

$len = count($result_dangqian);

for($i=0;$i<$len;$i++){

	$result_dangqian[$i]['n_content'] = strip_tags(htmlspecialchars_decode($result_dangqian[$i]['n_content']));

}

include MODEL.'page'.PH;

include CONTROLLER.$_M.DS.'common'.PH;


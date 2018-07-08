<?php 
$ctl=$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
$result = select_list($mysqli,$sql);
// include MODEL.'page'.PH;
$id = $_GET['id'];//新闻中心根据id跳转详情

$sql1 = 'select * from news where n_id ='.$id;
// $result1 = select_list($mysqli,$sql1);
$result1 = select_assoc($mysqli,$sql1);
// var_dump($result1);die;
$sql2 = 'select m_name,m_id from menu where m_pid=62';
$result2 = select_list($mysqli,$sql2);
// var_dump($result2);die;
$result1['n_content'] = strip_tags(htmlspecialchars_decode($result1['n_content']));

$sql3 = 'select * from news where n_id<'.$id.' and n_type = '.$result1['n_type'].' order by n_id desc limit 1';
$result3 = select_assoc($mysqli,$sql3);
// echo "<pre>";
// var_dump($result3);
$sql4 = 'select * from news where n_id>'.$id.' and n_type = '.$result1['n_type'].' order by n_id desc limit 1';
$result4 = select_assoc($mysqli,$sql4);

include CONTROLLER.$_M.DS.'common'.PH;


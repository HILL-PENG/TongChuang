<?php 
$ctl=empty($_GET['ctl'])?'index':$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
$result = select_list($mysqli,$sql);
// var_dump($result);die;
$id = empty($_GET['type']) ? 67 : $_GET['type'];
// var_dump($result);die;

$sql1 = "select * from prod where p_type=$id order by p_id desc limit 5";
// $sql1 = "select * from prod limit 5";
$result1 = select_list($mysqli,$sql1);
// echo "<pre>";
// var_dump($result1);

$sql2 = 'select * from news order by n_id desc limit 6 ';
$result2 = select_list($mysqli,$sql2);
// $n_ab=substr($result2['n_content'],0,8);
// include MODEL.'page'.PH;
// var_dump($result2[0]['n_title']);die;
$sql4 = 'select m_id,m_name from menu where m_pid=66';
$result4 = select_list($mysqli,$sql4);
// echo "<pre>";
// var_dump($result4);die;
// var_dump($id);die;
include CONTROLLER.$_M.DS.'common'.PH;

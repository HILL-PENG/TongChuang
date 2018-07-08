<?php 
$ctl=$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
$result = select_list($mysqli,$sql);

$id = empty($_GET['id']) ? 1 : $_GET['id'];
// var_dump($id);
$sql2 = 'select a_id,a_p_name from about';
$result2= select_list($mysqli,$sql2);

$sql1 = 'select * from about where a_id='.$id;
$result1= select_assoc($mysqli,$sql1);
// echo "<pre>";
// var_dump($result1);die;

$result1['a_con'] = strip_tags(htmlspecialchars_decode($result1['a_con']));


// var_dump($result1['a_img']);die;
// include MODEL.'page'.PH;
include CONTROLLER.$_M.DS.'common'.PH;


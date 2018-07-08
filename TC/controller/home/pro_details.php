<?php 
$ctl=$_GET['ctl'];

$sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
$result = select_list($mysqli,$sql);
// include MODEL.'page'.PH;
// 
$id = $_GET['id'];

$sql1 = 'select * from prod where p_id = '.$id;
$result1 = select_assoc($mysqli,$sql1);
$result1['p_content'] = strip_tags(htmlspecialchars_decode($result1['p_content']));

$sql2 = 'select * from menu where m_pid = 66';
$result2 = select_list($mysqli,$sql2);

include CONTROLLER.$_M.DS.'common'.PH;


<?php 

$sql99 = 'select * from nav';
$result99 = select_list($mysqli,$sql99);

$ctl=empty($_GET['ctl'])?'index':$_GET['ctl'];

$sql98 = 'select * from menu where m_pid=66';//footer
$result98 = select_list($mysqli,$sql98);

$sql97 = 'select a_id,a_p_name from about';//footer
$result97= select_list($mysqli,$sql97);

$sql96 = 'select * from mes';//footer
$result96= select_assoc($mysqli,$sql96);
// $sql2 = 'select * from prod where p_type='.$result1['m_id'];
// $result2 = select_list($mysqli,$sql2);
// var_dump($result1);die;
include VIEW.$_M.DS.'header'.HT;
include VIEW.$_M.DS.$_C.HT;
include VIEW.$_M.DS.'footer'.HT;
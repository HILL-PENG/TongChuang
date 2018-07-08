<?php 
if($_A=='index'){
	
	$sql = "SELECT * FROM menu";

	$sql2 = "select * from admin where id = '{$_SESSION['id']}' ";
    $result2 = select_list($mysqli,$sql2);

    // var_dump($result2);die;
    $sql3 = "select * from level where level_id = '{$result2[0]['level_id']}' ";//获取用户权限名以显示
    // echo $sql3;die;
    $result3 = select_assoc($mysqli,$sql3);
    $result3['level_arr'] = json_decode($result3['level_arr']);
    // var_dump($result3['level_arr']);die; 

	$result = select_list($mysqli,$sql);

	include VIEW.M_MOT.DS.C_CTL.DS.A_ACT.HT;
}elseif($_A == 'welcome'){
	
	include VIEW.M_MOT.DS.C_CTL.DS.A_ACT.HT;
}



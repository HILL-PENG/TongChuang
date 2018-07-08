<?php 
if($_A=='index')
{
	$sql = "select * from level order by level_id desc";

    $result = select_list($mysqli,$sql);
    // echo "<pre>";
    // var_dump($result);die;
    $len = count($result);

    include_once VIEW.$_M.DS.$_C.DS.$_A.HT;

}elseif($_A == 'add'){
	
	if($_POST){	

		$data = $_POST;
		
		$data['level_arr'] = json_encode($data['level_arr']);

		$result = insert($data,'level');

        if($result){
            echo "<script> alert('添加成功');location.href='index.php?mot=admin&ctl=level'</script>"; 
        }else{
            echo "<script> alert('添加失败');location.href='index.php?mot=admin&ctl=level'</script>"; 
        }

	}
	else
	{
		$sql = "select * from menu";
		$result = select_list($mysqli,$sql);
		
   		include VIEW.$_M.DS.$_C.DS.$_A.HT;

	}
}elseif($_A == 'edit'){
	if($_POST){
        $data = $_POST;
        $data['level_arr'] = json_encode($data['level_arr']);
        
        $id=$_GET['id'];

        if(update('level',$data,"level_id=$id")){
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=level'</script>"; 
        }else{
            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=level'</script>"; 
        }
    }

    $id = $_GET['id'];
    $sql = 'select * from level where level_id = '.$id ;
    $list = select_assoc($mysqli,$sql);
    $list['level_arr'] = json_decode($list['level_arr']);

    $sql = "select * from menu";
	$result = select_list($mysqli,$sql);

    include VIEW.$_M.DS.$_C.DS.$_A.HT;

}elseif ($_A == 'del') {
    $id=$_GET['id'];

    $sql = "delete from level where level_id='$id'";
    $result = delete($sql);

    if($result){
        echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=level'</script>"; 
    }else{
        echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=level'</script>"; 
    }
}
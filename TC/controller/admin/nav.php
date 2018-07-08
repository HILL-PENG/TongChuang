<?php 
if ($_A == 'index') {

	$sql = "select * from nav order by nav_id desc";

    $result = select_list($mysqli,$sql);

    $len = count($result);

	include VIEW.$_M.DS.$_C.DS.$_A.HT;

}elseif ($_A == 'add') {

	if ($_POST) {
		$data = $_POST;
		$create_time=time();
        $data['nav_create_time']=date("Y-m-d H:i:s",$create_time);
        $result = insert($data,'nav');

        if($result){
            echo "<script> alert('添加成功');location.href='index.php?mot=admin&ctl=nav'</script>"; 
        }else{
            echo "<script> alert('添加失败');location.href='index.php?mot=admin&ctl=nav'</script>"; 
        }

	}

	include VIEW.$_M.DS.$_C.DS.$_A.HT;
	
}elseif ($_A == 'edit') {
    
    if($_POST){

        $data = $_POST;

        $id=$_GET['id'];

        if(update('nav',$data,"nav_id=$id")){
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=nav'</script>"; 
        }else{
            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=nav'</script>"; 
        }
    }else{

        $id=$_GET['id'];
        $sql = 'select * from nav where nav_id = '.$id ;
        $result = select_assoc($mysqli,$sql);

    	include VIEW.$_M.DS.$_C.DS.$_A.HT;
	}
}elseif ($_A == 'del') {

	$id=$_GET['id'];

    $sql = "delete from nav where nav_id='$id'";
    $result = delete($sql);

    if($result){
        echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=nav'</script>"; 
    }else{
        echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=nav'</script>"; 
    }
}

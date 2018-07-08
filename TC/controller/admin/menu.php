<?php 
if ($_A == 'index') {

    $sql = "select * from menu order by m_id desc";

    $result = select_list($mysqli,$sql);

    $len = count($result);

    include VIEW.$_M.DS.$_C.DS.$_A.HT;

}elseif($_A == 'add'){


    if($_POST){
        $data = $_POST;

        $create_time=time();
        $data['m_create_time']=date("Y-m-d H:i:s",$create_time);
        $result = insert($data,'menu');

        if($result){
            echo "<script> alert('添加成功');location.href='index.php?mot=admin&ctl=menu'</script>"; 
        }else{
            echo "<script> alert('添加失败');location.href='index.php?mot=admin&ctl=menu'</script>"; 
        }
         
    }else{
        $tree = cate_tree();

        include VIEW.$_M.DS.$_C.DS.$_A.HT;
    }

    
}elseif($_A == 'edit'){

    if($_POST){
        $data = $_POST;

        $edit_time=time();
        $data['m_edit_time']=date("Y-m-d H:i:s",$edit_time);

        $id=$_GET['id'];

        if(update('menu',$data,"m_id=$id")){
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=menu'</script>"; 
        }else{
            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=menu'</script>"; 
        }
    }

    $tree = cate_tree();
    $id = $_GET['id'];
    $sql = 'select * from menu where m_id = '.$id ;
    $result = select_assoc($mysqli,$sql);

    include VIEW.$_M.DS.$_C.DS.$_A.HT;

}elseif ($_A == 'del') {
        // echo "<script> if(confirm( '请选择跳转页面，是跳转到yes.html  否跳转到no.html？ '))  location.href='yes.html';else location.href='no.html'; </script>"; 
        // die;
        $id=$_GET['id'];

        $sql = "delete from menu where m_id='$id'";
        $result = delete($sql);

        if($result){
            echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=menu'</script>"; 
        }else{
            echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=menu'</script>"; 
        }
    
}


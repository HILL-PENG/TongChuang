<?php 

if($_A == 'index'){

    $sql = "select * from banner order by b_id desc";

    $result = select_list($mysqli,$sql);

    $len = count($result);

    include_once(VIEW.$_M.DS.$_C.DS.$_A.HT);

}elseif ($_A == 'add') {

    if ($_POST) {
        
        $data = $_POST;

        if (!empty($_FILES['b_img']['name'])){
            upload_init('upload');
            $data['b_img']= 'upload/'.upload($_FILES['b_img']);
            $data['b_thum']=reSizeImg($data['b_img'], '100', '60');
        }
        
        $result = insert($data,'banner');//添加数据，$data数组，news表名
        
        if($result){
            echo "<script> alert('添加成功');location.href='index.php?mot=admin&ctl=banner'</script>"; 
        }else{
            echo "<script> alert('添加失败');location.href='index.php?mot=admin&ctl=banner'</script>"; 
        }

    } else {

        include VIEW.$_M.DS.$_C.DS.$_A.HT;

    }    

}elseif($_A == 'edit'){
    if ($_POST) {
        $id = $_GET['id'];

        $data = $_POST;

        if (!empty($_FILES['b_img']['name'])){
            upload_init('upload');
            $data['b_img']= upload($_FILES['b_img']);
            $data['b_thum']=reSizeImg('upload/'.$data['b_img'], '100', '60');
        }

        if(update('banner',$data,"b_id=$id")){

            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=banner'</script>"; 
        }else{

            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=banner'</script>"; 
        }
    
    }else{
        $id = $_GET['id'];

        $sql = "select * from banner where b_id={$id}";

        $result = select_assoc($mysqli,$sql);

        include VIEW.$_M.DS.$_C.DS.$_A.HT;
    }
    
}elseif($_A == 'del'){
  
    $id=$_GET['id'];

    $sql = "delete from banner where b_id='$id'";

    $result = delete($sql);

    if($result){

        echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=banner'</script>"; 
    }else{
        
        echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=banner'</script>"; 
    }
  
}
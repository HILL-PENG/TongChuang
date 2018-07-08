<?php 

if($_A == 'index'){

    $sql = "select * from prod order by p_id desc";
    $result = select_list($mysqli,$sql);
    // var_dump($result);die;
    $len = count($result);

    for($i=0;$i<$len;$i++){
        $result[$i]['p_content'] = strip_tags(htmlspecialchars_decode($result[$i]['p_content']));

        $sql1 = "select m_name from menu where m_id=".$result[$i]['p_type'];
        $result1 = select_assoc($mysqli,$sql1); 
         
        $result[$i]['p_type']=$result1['m_name'];
    }

    include_once(VIEW.$_M.DS.$_C.DS.$_A.HT);

}elseif ($_A == 'add') {
  
    if ($_POST) {
        
        $data = $_POST;
        $data['p_author'] = $_SESSION['nickname'];//获取当前用户作为编辑人员
       
        if(empty($data['p_name'])){
            echo "<script> alert('产品名称不能为空');history.go(-1);</script>"; 
        }elseif(empty($data['p_content'])){
            echo "<script> alert('内容不能为空');history.go(-1);</script>"; 
        }else{
            if(!empty($_FILES['p_img']['name'])){
                upload_init('upload');
                $data['p_img']= upload($_FILES['p_img']);
                $data['p_thumbnail']=reSizeImg('upload/'.$data['p_img'], '100', '60');
            }


            $data['p_content'] = htmlspecialchars($data['p_content']);

            $create_time=time();
            $data['p_create_time']=date("Y-m-d H:i:s",$create_time);
            $result = insert($data,'prod');

            if($result){
                echo "<script> alert('添加成功');location.href='index.php?mot=admin&ctl=prod'</script>"; 
            }else{
                echo "<script> alert('添加失败');location.href='index.php?mot=admin&ctl=prod'</script>"; 
            }
        }

    } else {
        $sql = "select m_id from menu where m_name='产品中心'";
        $result = select_assoc($mysqli,$sql);
        $sql1 = "select m_id,m_pid,m_name from menu where m_pid={$result['m_id']}";
        $res = select_list($mysqli,$sql1);

        include VIEW.$_M.DS.$_C.DS.$_A.HT;

    }    

}elseif($_A == 'edit'){
    if ($_POST) {
        $id = $_GET['id'];

        $data = $_POST;

        if(!empty($_FILES['p_img']['name'])){
            upload_init('upload');
            $data['p_img']= upload($_FILES['p_img']);
            $data['p_thumbnail']=reSizeImg('upload/'.$data['p_img'], '100', '60');
        }
        $data['p_content'] = htmlspecialchars($data['p_content']);
        if(update('prod',$data,"p_id=$id")){
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=prod'</script>"; 
        }else{
            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=prod'</script>"; 
        }

    }else{
        $id = $_GET['id'];

        $sql = "select * from prod where p_id={$id}";
        $result = select_assoc($mysqli,$sql);
        $result['p_content'] =strip_tags(htmlspecialchars_decode($result['p_content']));
        // echo "<pre>";
        // var_dump($result);die;

        $sql2 = "select m_id from menu where m_name='产品中心'";
        $result2 = select_assoc($mysqli,$sql2);
        $sql1 = "select m_id,m_pid,m_name from menu where m_pid={$result2['m_id']}";
        $res = select_list($mysqli,$sql1);

        include VIEW.$_M.DS.$_C.DS.$_A.HT;
    }
    
}elseif($_A == 'del'){
  
    $id=$_GET['id'];

    $sql = "delete from prod where p_id='$id'";
    $result = delete($sql);

    if($result){
        echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=prod'</script>"; 
    }else{
        echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=prod'</script>"; 
    }
  
}




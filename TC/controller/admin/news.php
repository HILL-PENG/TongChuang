<?php 
if($_A == 'index'){
    $sql = "select * from news order by n_id desc";
    $result = select_list($mysqli,$sql);
    // echo '<pre>';
    // var_dump($result['n_type']);
    $len = count($result);

    for($i=0;$i<$len;$i++){
        // $result[$i]['n_content'] = strip_tags(htmlspecialchars_decode($result[$i]['n_content']));

        $sql1 = "select m_name from menu where m_id=".$result[$i]['n_type'];
        $result1 = select_assoc($mysqli,$sql1); 
         
        // echo"<pre>";
        // var_dump($result1['m_name']);
        $result[$i]['n_type']=$result1['m_name'];
        // var_dump($result[$i]['n_type']);
    }

    // die;
        
    include_once(VIEW.$_M.DS.$_C.DS.$_A.HT);

}elseif ($_A == 'add') {  

    if ($_POST) {

        $data = $_POST;
        $data['n_create_time'] = time();//当前时间戳
        $data['n_create_time'] = date("Y-m-d H:i:s",$data['n_create_time']);
        
    	$data['n_entry_time'] = time();//当前时间戳
        $data['n_entry_time'] = date("Y-m-d H:i:s",$data['n_entry_time']);
       
        if(empty($data['n_title'])){
            echo "<script> alert('标题不能为空');history.go(-1);</script>"; 
        }elseif(empty($data['n_content'])){
            echo "<script> alert('内容不能为空');history.go(-1);</script>"; 
        }else{

            // if(!empty($_FILES['n_thumbnails']['name'])){
            //     upload_init('upload');
            //     $data['n_thumbnails']= upload($_FILES['n_thumbnails']);
            // }
            if (!empty($_FILES['n_img']['name'])){
                upload_init('upload');
                $data['n_img']= upload($_FILES['n_img']);
                $data['n_thum']=reSizeImg('upload/'.$data['n_img'], '100', '60');
            }
            if (!empty($_FILES['n_img2']['name'])){
                upload_init('upload');
                $data['n_img2']= upload($_FILES['n_img2']);
            }
        }
        // var_dump($data['n_img1']);die;

        $data['n_content'] = htmlspecialchars($data['n_content']);

        // var_dump($data);die;
        $result = insert($data,'news');

        if($result){
            echo "<script> alert('添加成功');location.href='index.php?mot=admin&ctl=news'</script>"; 
        }else{
            echo "<script> alert('添加失败');location.href='index.php?mot=admin&ctl=news'</script>"; 
        }
    

    } else {
        $sql = "select m_id from menu where m_name='新闻中心'";
        $result = select_assoc($mysqli,$sql);
        $sql1 = "select m_id,m_pid,m_name from menu where m_pid={$result['m_id']}";
        $res = select_list($mysqli,$sql1);

    	include VIEW.$_M.DS.$_C.DS.$_A.HT;

    }    

}elseif($_A=='edit'){

    if ($_POST) {

        $data = $_POST;

        $data['n_entry_time'] = time();//当前时间戳
        $data['n_entry_time'] = date("Y-m-d H:i:s",$data['n_entry_time']);
        
        if (!empty($_FILES['n_img']['name'])){
            upload_init('upload');
            $data['n_img']= upload($_FILES['n_img']);
            $data['n_thum']=reSizeImg('upload/'.$data['n_img'], '100', '60');
            // var_dump($data['b_thum']);die;
        }
        if (!empty($_FILES['n_img2']['name'])){
            upload_init('upload');
            $data['n_img2']= upload($_FILES['n_img2']);
        }
        $data['n_content'] = htmlspecialchars($data['n_content']);
        
        $id = $_GET['id']; 

        if(update('news',$data,"n_id=$id")){
   
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=news'</script>";

        }else{

            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=news'</script>";
        }

    }
        
     
    $id = $_GET['id'];
    $sql = "select * from news where n_id={$id}";
    $result = select_assoc($mysqli,$sql);
    $result['n_content'] = strip_tags(htmlspecialchars_decode($result['n_content']));
    // echo '<pre>';
    //          var_dump($result);die;
    $sql2 = "select m_id from menu where m_name='新闻中心'";
    $result2 = select_assoc($mysqli,$sql2);
    $sql1 = "select m_id,m_pid,m_name from menu where m_pid={$result2['m_id']}";
    $res = select_list($mysqli,$sql1);

    include VIEW.$_M.DS.$_C.DS.$_A.HT;
      
}elseif($_A = 'del'){
  
    $id=$_GET['id'];

    $sql = "delete from news where n_id='$id'";
    $result = delete($sql);

    if($result){
        echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=news'</script>"; 
    }else{
        echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=news'</script>"; 
    }


      
}


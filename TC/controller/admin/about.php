<?php 

if($_A == "index"){

	$sql = "select * from about order by a_id desc";
	$result = select_list($mysqli,$sql);
	$len = count($result);

	for($i=0;$i<$len;$i++){

        $result[$i]['a_con'] = strip_tags(htmlspecialchars_decode($result[$i]['a_con']));

    }

}elseif($_A == "edit"){

	if($_POST){
		$data = $_POST;
		$id = $_GET['id'];

		if (!empty($_FILES['a_img']['name'])){
            upload_init('upload');
            $data['a_img']= upload($_FILES['a_img']);
            $data['a_thum']=reSizeImg('upload/'.$data['a_img'], '160', '120');
        }
		$data['a_con'] = htmlspecialchars($data['a_con']);

        if(update('about',$data,"a_id=$id")){
   
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=about'</script>";

        }else{

            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=about'</script>";
        }

	}

	$id = $_GET['id'];

	$sql = "select * from about where a_id ={$id}";
	$result = select_assoc($mysqli,$sql);
	$result['a_con'] = strip_tags(htmlspecialchars_decode($result['a_con']));
}


include VIEW.$_M.DS.$_C.DS.$_A.HT;
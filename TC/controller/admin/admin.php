<?php  
if ($_A == 'index') {

	$sql = "select * from admin";

    $result = select_list($mysqli,$sql);
    // var_dump($result);
    $sql2 = "select * from level";
    $result2 = select_list($mysqli,$sql2);
    // echo "<pre>";
    // var_dump($result2);
    foreach($result as $k => $v){
    	// if($result2[]['level_id']==$result[$k]['level_id']){
			$result[$k]['level_id'] = $result2[$k]['level_name'];
    	// }
    }
    // echo "<pre>";
    // var_dump($result);die;

    $len = count($result);


	include VIEW.$_M.DS.$_C.DS.$_A.HT;

}elseif ($_A == 'add') {

	if ($_POST) {
		$create_time=time();
		$data = $_POST;
		$data['create_time']=date("Y-m-d H:i:s",$create_time);

		$username = $data['username'];
		if(!preg_match("/^[a-zA-Z][a-zA-Z0-9]{7,17}$/",$username)){
			$info = [ 
				'code' => 0,
				'msg' => '帐号必须使用字母或者字母和数字组成，账号不能以数字开头，8～18位'
			];
			exit(json_encode($info));
		}
		$sql = "select id from admin where username = '$username'";//查询是否已存在账号
    	$result = select_assoc($mysqli,$sql);
		if(!empty($result)){
			$info =[
				'code' => 0,
				'msg' => '账号已存在'
			];
			exit(json_encode($info));
		}
		if(!preg_match("/^[a-zA-Z0-9]\w{5,15}$/",$data['password'])){
			$info = [
				'code' =>0,
				'msg' =>'请输入6～16位密码'
			];
			exit(json_encode($info));
		}
		if($data['password'] !== $data['password2']){
			$info = [
				'code' =>0,
				'msg' =>'两次密码不一致'
			];
			exit(json_encode($info));
		}
		if(empty($data['nickname'])){
			$info = [
				'code' => 0,
				'msg' => '昵称不能为空'
			];
			exit(json_encode($info));
		}
		$sql = "select id from admin where nickname = '{$data['nickname']}'";//查询
    	$result = select_list($mysqli,$sql);
		if(!empty($result)){
			$info = [
				'code' =>0,
				'msg' =>'昵称已存在'
			];
			exit(json_encode($info));
		}
		if(!preg_match("/^1[34578]\d{9}$/",$data['phone'])){
			$info = [
				'code' =>0,
				'msg' =>'请输入正确的手机号码'
			];
			exit(json_encode($info));
		}
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$data['email'])){
			$info = [
				'code' =>0,
				'msg' =>'请输入正确的邮箱'
			];
			exit(json_encode($info));
		}

		unset($data['password2']);//销毁password2


		$result = insert($data,'admin');

		if($result){
			$info = [
				'code' =>1,
				'msg' =>'注册成功',
				'url' =>'index.php?mot=admin&ctl=admin&act=index'
			];
			exit(json_encode($info));
		}
		else
		{
			$info = [
				'code' =>0,
				'msg' =>'很抱歉，注册失败'
			];
			exit(json_encode($info));
		}

	}else{
		$sql1 = "select * from level";//权限下拉框
		$result1 = select_list($mysqli,$sql1);
		// echo "<pre>";
		// var_dump($result1);die;

		include VIEW.$_M.DS.$_C.DS.$_A.HT;

	}
}elseif ($_A == 'edit') {

	if ($_POST) {

		$data = $_POST;
		unset($data['id']);
		$id = $_POST['id'];
		// var_dump($data);die;
		if(!preg_match("/^[a-zA-Z0-9]\w{5,15}$/",$data['password'])){
			$info = [
				'code' =>0,
				'msg' =>'请输入6～16位密码'
			];
			exit(json_encode($info));
		}
		if($data['password'] !== $data['password2']){
			$info = [
				'code' =>0,
				'msg' =>'两次密码不一致'
			];
			exit(json_encode($info));
		}
		if(empty($data['nickname'])){
			$info = [
				'code' => 0,
				'msg' => '昵称不能为空'
			];
			exit(json_encode($info));
		}
		if(!empty($result) && $id!=$result['id'] ){
			$info = [
				'code' =>0,
				'msg' =>'昵称已存在'
			];
			exit(json_encode($info));
		}

		unset($data['password2']);//销毁password2
		

        if(update('admin',$data,"id=$id")){
   
       		$info = [
				'code' =>1,
				'msg' =>'修改成功',
				'url' =>'index.php?mot=admin&ctl=admin'
			];
			exit(json_encode($info));

        }else{

            $info = [
				'code' =>0,
				'msg' =>'修改失败'
			];
			exit(json_encode($info));
		}


	} else {
		$id = $_GET['id']; 

        $sql = "select * from admin where id={$id}";
        
        $result = select_assoc($mysqli,$sql);

		include VIEW.$_M.DS.$_C.DS.$_A.HT;

	}
	
}elseif ($_A == 'del') {
        // echo "<script> if(confirm( '请选择跳转页面，是跳转到yes.html  否跳转到no.html？ '))  location.href='yes.html';else location.href='no.html'; </script>"; 
        // die;
        $id=$_GET['id'];

        $sql = "delete from admin where id='$id'";
        $result = delete($sql);

        if($result){
            echo "<script> alert('删除成功');location.href='index.php?mot=admin&ctl=admin'</script>"; 
        }else{
            echo "<script> alert('删除失败');location.href='index.php?mot=admin&ctl=admin'</script>"; 
        }
    
}

<?php 
header("content-type:text/html;charset=utf-8");

if($_A == 'index'){

	if ($_POST) {

		$data = $_POST;
		// $data['username'] = $_POST['username'];
		// $data['password'] = $_POST['password'];
		
		$sql = "select id,username,password,nickname from admin where username='{$data['username']}'";

		$result = select_assoc($mysqli,$sql);//查询用户
		
		$data['incode'] = strtolower($_POST['incode']);//不区分大小写
		
		if( !empty($data['username']) && !empty($data['password']) ){//输入非空
			
			if ($data['incode'] == $_SESSION['vcode']) {//判断验证码

				$_SESSION['id'] = $result['id'];//保存服务器
			    $_SESSION['nickname'] = $result['nickname'];

			    

			    if($data['password'] == $result['password']){//判断密码
			 	
				    $info = [
		               'code' =>1,
		               'url'  => 'index.php?mot=admin&ctl=index',
		               'msg' =>'登录成功'
				    ];
			         echo json_encode($info);exit;
			    }else{
			        $info = [
				       'code' =>0, 
				       'msg' =>'账号或密码错误'       
				    ];
				    echo json_encode($info);exit;
				}
			
			}else{

				$info = [
					'code' =>0,
					'msg' =>'验证码错误'
				];
				echo json_encode($info);exit;
				// echo "<script>alert('验证码错误');</script>";
				// echo "<script>window.location='index.php?mot=admin&ctl=login';</script>";
			}


		}else{

			$info = [
					'code' =>0,
					'msg' =>'账号密码不能为空'
			];
			echo json_encode($info);exit;

		}
		
		
		
	}else{
		include VIEW.$_M.DS.$_C.DS.$_A.HT;
	}	

}
elseif($_A == 'captche'){ 

    include MODEL.'captche'.PH;

}elseif($_A=='quit'){

  unset($_SESSION['id']);

  echo "<script>location.href='index.php?mot=admin&ctl=login'</script>";

}

	

<?php 
if($_POST){
    $data = $_POST;
    // var_dump($data);die;
    if( !empty($data['c_name']) && !empty($data['c_phone'])&& !empty($data['c_text'])&& !empty($data['c_email']) ) {//输入非空

        if ($data['incode'] == $_SESSION['vcode']) {//判断验证码
            unset($data['incode']);
            if(insert($data,'contact')){
                echo "<script> alert('提交成功');location.href='index.php?mot=home&ctl=contact_us'</script>";
            }else{
                echo "<script> alert('提交失败');location.href='index.php?mot=home&ctl=contact_us'</script>";
            }

        }else{
            echo "<script> alert('请填写正确的验证码');location.href='index.php?mot=home&ctl=contact_us'</script>";
        }
    }else{
        echo "<script> alert('请完善表单');location.href='index.php?mot=home&ctl=contact_us'</script>";

        include CONTROLLER.$_M.DS.'common'.PH;
    }
}else{
    $ctl=$_GET['ctl'];

    $sql = 'select * from banner where b_ctl = "'.$ctl.'" limit 3';
    $result = select_list($mysqli,$sql);
    include CONTROLLER.$_M.DS.'common'.PH;
}



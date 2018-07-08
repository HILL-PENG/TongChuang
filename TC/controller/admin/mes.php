<?php 
if($_A == 'index'){
    $sql = "select * from mes";
    $result = select_assoc($mysqli,$sql);

    include_once(VIEW.$_M.DS.$_C.DS.$_A.HT);

}elseif($_A=='edit'){

    if ($_POST) {

        $data = $_POST;

        if (!empty($_FILES['mes_logo']['name'])){
            upload_init('upload');
            $data['mes_logo']= upload($_FILES['mes_logo']);
            $data['mes_thum']=reSizeImg('upload/'.$data['mes_logo'], '100', '60');
        }
        
        $id = $_GET['id']; 

        if(update('mes',$data,"mes_id=$id")){
   
            echo "<script> alert('修改成功');location.href='index.php?mot=admin&ctl=mes'</script>";

        }else{

            echo "<script> alert('修改失败');location.href='index.php?mot=admin&ctl=mes'</script>";
        }

    }
        
     
    $id = $_GET['id'];
    $sql = "select * from mes where mes_id={$id}";
    $result = select_assoc($mysqli,$sql);
 
    include VIEW.$_M.DS.$_C.DS.$_A.HT;
      
}

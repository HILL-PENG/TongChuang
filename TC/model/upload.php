<?php
/*初始化图片配置

$max_size=2097152 最大2M
*/
function upload_init($path,$mime=['image/jpeg','image/png','image/gif'],$max_size=2097152){
    $GLOBALS['upload_init']['path'] = $path . '/';
    $GLOBALS['upload_init']['max_size'] = $max_size;
    $GLOBALS['upload_init']['mime'] = $mime;
}
/*
 * 检查图片是否符合要求*/
/*$file  :传入$_FILES['img']的值*/
//function check_img($file){
//    if(!in_array($file['type'],$GLOBALS['upload_init']['max_size'])){
//        echo file_error(-1);
//        return false;
//    }elseif ($file['size']>$GLOBALS['upload_init']['max_size']){
//        echo file_error(-2);
//        return false;
//    }
//}
/*文件放的位置$GLOBALS['upload_init']['path']*/
/*$file  :传入$_FILES['img']的值(也是一个数组)*/
function upload($file){
    if ($file['error']==0){
        if(!in_array($file['type'],$GLOBALS['upload_init']['mime'])){
            echo "<script>alert('".upload_error(-1)."');history.go(-1);</script>";
            exit;
        }elseif ($file['size']>$GLOBALS['upload_init']['max_size']){
            echo "<script>alert('".upload_error(-2)."');history.go(-1);</script>";
            exit;

        }
        $file_arr=explode('.',$file['name']);
        $file_format=end($file_arr);
        //创建upload下的文件夹
        $sub_path = date("Ymd",time()).'/';
        $file_name= date("YmdHis").uniqid().'.'.$file_format;
        if (!is_dir($GLOBALS['upload_init']['path'].$sub_path )){
            mkdir($GLOBALS['upload_init']['path'].$sub_path ,0777);
        }
        if(move_uploaded_file($file['tmp_name'],$GLOBALS['upload_init']['path'].$sub_path.$file_name)){
            //返回文件夹路径和文件名
            return $sub_path.$file_name;
        }else{

            echo "<script>alert('".upload_error(-3)."');history.go(-1);</script>";
            exit;
        }
    }else{
        # 上传到临时文件夹失败，根据其错误号设置错误号
           echo "<script>alert('".upload_error($file['error'])."');history.go(-1);</script>";
           exit;
    }
}
/*$file  :传入$_FILES['img']的值*/
function upload_error($error){
    switch ($error){
        case -1:
            $info='请检查你的文件类型，目前支持的类型有'.implode(',', $GLOBALS['upload_init']['mime']);
            break;
        case -2:
            $info= '文件超出系统规定的大小，最大不能超过'. $GLOBALS['upload_init']['max_size'];
            break;
        case -3:
            $info='文件移动失败';
            break;
        case 1:
            $info= '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值,最大能传'.ini_get('upload_max_filesize');
            break;
        case 2:
            $info= '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
            break;
        case 3:
            $info= '文件只有部分被上传';
            break;
//        case 4:
//            $info='没有文件被上传';
//            break;//图片可以不传
        case 6:
            $info= '找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进';
            break;
        case 7:
            $info= '文件写入临时文件夹失败。PHP 5.1.0 引进';
            break;
    }

    return $info;
}
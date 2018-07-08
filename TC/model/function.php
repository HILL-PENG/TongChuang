<?php

/**
  *无极分类 递归  分类添加


**/

function cate_tree($pid=0,$data=[],$len=0){
    global $mysqli;
	static $data;
    $sql = "select m_id,m_pid,m_name from menu where m_pid={$pid}";
    // echo $sql;
	$res = select_list($mysqli,$sql);  //前台
	if(is_array($res)){
		$r = count($res);
		$len +=1;
		for ($i=0; $i < $r ; $i++) {
			// if(is_array())
			if($len>0){
				$res[$i]['m_name'] = str_repeat('&nbsp;&nbsp;',$len-1).str_repeat('-|',$len-1).$res[$i]['m_name'];
			}
			$data[] = $res[$i];
			cate_tree($res[$i]['m_id'],$data,$len);
		   
		}
	}
	
	return $data;
}


//生成缩略图
function reSizeImg($imgSrc, $resize_width, $resize_height, $isCut = false) {
        //图片的类型
        $type = substr(strrchr($imgSrc, "."), 1);
        //初始化图象
        if ($type == "jpg") {
            $im = imagecreatefromjpeg($imgSrc);
        }
        if ($type == "gif") {
            $im = imagecreatefromgif($imgSrc);
        }
        if ($type == "png") {
            $im = imagecreatefrompng($imgSrc);
        }
        //目标图象地址
        $full_length = strlen($imgSrc);
        $type_length = strlen($type);
        $name_length = $full_length - $type_length;
        $name = substr($imgSrc, 0, $name_length - 1);
        $dstimg = $name . "_s." . $type;
 
        $width = imagesx($im);
        $height = imagesy($im);
 
        //生成图象
        //改变后的图象的比例
        $resize_ratio = ($resize_width) / ($resize_height);
        //实际图象的比例
        $ratio = ($width) / ($height);
        if (($isCut) == 1) { //裁图
            if ($ratio >= $resize_ratio) { //高度优先
                $newimg = imagecreatetruecolor($resize_width, $resize_height);
                imagecopyresampled($newimg, $im, 0, 0, 0, 0, $resize_width, $resize_height, (($height) * $resize_ratio), $height);
                ImageJpeg($newimg, $dstimg);
            }
            if ($ratio < $resize_ratio) { //宽度优先
                $newimg = imagecreatetruecolor($resize_width, $resize_height);
                imagecopyresampled($newimg, $im, 0, 0, 0, 0, $resize_width, $resize_height, $width, (($width) / $resize_ratio));
                ImageJpeg($newimg, $dstimg);
            }
        } else { //不裁图
            if ($ratio >= $resize_ratio) {
                $newimg = imagecreatetruecolor($resize_width, ($resize_width) / $ratio);
                imagecopyresampled($newimg, $im, 0, 0, 0, 0, $resize_width, ($resize_width) / $ratio, $width, $height);
                ImageJpeg($newimg, $dstimg);
            }
            if ($ratio < $resize_ratio) {
                $newimg = imagecreatetruecolor(($resize_height) * $ratio, $resize_height);
                imagecopyresampled($newimg, $im, 0, 0, 0, 0, ($resize_height) * $ratio, $resize_height, $width, $height);
                ImageJpeg($newimg, $dstimg);
            }
        }
        ImageDestroy($im);
        return $dstimg;
    }
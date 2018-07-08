<?php
/**
 * [vcode 生成验证码图片]
 * @param  [自然数] $number [验证码字符个数]
 * @param  [自然数] $size   [验证码字体大小]
 * @param  [自然数] $width  [验证码图片宽度]
 * @param  [自然数] $height [验证码图片高度]
 * @param  [字符串]  $str    [验证码字符串源]
 * @param  [数组]   $font   [字体文件路径数组]
 */
function vcode($number=4,$size=20,$width=0,$height=0,$str="347acdefhjkmnpqrtuvwxyACDEFGHJKMNPQRTUVWXY",$font=array('public/font/FZZQJW.TTF','public/font/STHUPO.TTF')){
	if($width==0) //如果没有传验证码图片宽度参数
	{
		$width=($number+1)*$size; //自动生成验证码图片的宽度
	}
	if($height==0) //如果没有传验证码图片高度参数
	{
		$height=$size*2.5; //自动生成验证码图片的高度
	}
	$im=imagecreatetruecolor($width,$height);//生成画布,参数(画布宽,画布高)
	//$red=imagecolorallocate($im,255,0,0);//生成颜色资源,参数(画布资源,R,G,B)
	$randTintColor=imagecolorallocate($im,rand(160,255),rand(160,255),rand(160,255));//生成随机浅颜色资源,参数(画布资源,R,G,B)
	$randColor=imagecolorallocate($im,rand(0,80),rand(0,80),rand(0,80));//生成随机深颜色资源,参数(画布资源,R,G,B)
	imagefilledrectangle($im, 0, 0, $width, $height, $randTintColor);//给画布添加背景颜色,参数(画布资源,起点X,起点Y,终点X,终点Y,颜色资源)
	//imagerectangle($im, 1, 1, 499, 299,$randColor);//画矩形,参数(画布资源,起点X,起点Y,终点X,终点Y,颜色资源)
	//$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFG";//验证码源
	//$strC="图片大小超过了浏览器限制";//中文验证码源
	//imagestring($im, 5, 20, 20, $str, $randColor);//将字符串添加进画布,参数(画布资源,文字大小[0-5],起点X,起点Y,字符串,颜色资源)
	$vcode='';//声明保存验证码字符串的变量
	//$font=array('FZZQJW.TTF','STHUPO.TTF');//字体数组
	$fontMaxIndex=count($font)-1;//获取字体数组最大索引
	for ($i=0; $i <$number ; $i++) { //循环添加文字到画布
		$wx=$size*0.5+$size*$i; //设置文字的X轴定位
		//$width=50+50*$i*1.2;//设置中文文字的X轴定位
		$wy=rand($size*1.5,$size*2); //随机获取文字的Y轴定位
		$strMaxIndex=strlen($str)-1;//获取验证码源最大索引
		$code=$str[rand(0,$strMaxIndex)];//获取随机验证码
		//$rand=rand(0,11);//获取随机数
		//$code=mb_substr($strC,$rand,1,'utf-8');//通过截取字符串方式获取验证码
		$vcode.=$code;//将验证码拼接到验证码字符串
		$randColor1=imagecolorallocate($im,rand(0,120),rand(0,120),rand(0,120));//生成随机颜色资源
		imagettftext($im, $size , rand(-10,10), $wx, $wy, $randColor1, $font[rand(0,$fontMaxIndex)], $code);//将文字添加进画布,参数(画布资源,文字大小,文字倾斜角度,起点X,起点Y,颜色资源,字体,文字);
	}
	$pn=$size*5;
	for ($i=0; $i < $pn; $i++) { //循环添加像素干扰点
		$randColor=imagecolorallocate($im,rand(0,80),rand(0,80),rand(0,80));//生成随机颜色资源
		$wwx= rand(0,$width);//设置干扰像素的X轴定位
		$wwy= rand(0,$height);//设置干扰像素的y轴定位
		// for ($j=0; $j <5 ; $j++) { 
		// 	for ($K=0; $K <5 ; $K++) { 
				//imagesetpixel($im, $wwx+$j, $wwy+$K, $randColor);
				imagesetpixel($im, $wwx, $wwy, $randColor);//在画布上画一个点,参数(画布资源,位置X,位置Y,颜色资源)
		// 	}
		// }
	}
	// for ($i=0; $i < 10; $i++) { //循环添加干扰线段
	// 	$randColor=imagecolorallocate($im,rand(0,80),rand(0,80),rand(0,80));//生成随机颜色资源
	// 	$wwxs= rand(0,250);//设置干扰线段起点的X轴定位
	// 	$wwxe= rand(250,500);//设置干扰线段终点的X轴定位
	// 	$wwys= rand(0,300);//设置干扰线段起点的Y轴定位
	// 	$wwye= rand(0,300);//设置干扰线段终点的Y轴定位
	// 	// for ($j=0; $j <5 ; $j++) { 
	// 	// 	for ($K=0; $K <5 ; $K++) { 
	// 			//imageline($im, $wwxs+$j, $wwys+$K, $wwxe+$j, $wwye+$K, $randColor);
	// 			imageline($im, $wwxs, $wwys, $wwxe, $wwye, $randColor);//在画布上画一条线,参数(画布资源,起点X,起点Y,终点X,终点Y,颜色资源)
	// 	// 	}
	// 	// }
	// }
	// for ($i=0; $i < 10; $i++) { //循环添加干扰弧线
	// 	$randColor=imagecolorallocate($im,rand(0,80),rand(0,80),rand(0,80));//生成随机颜色资源
	// 	$wwx= rand(0,500);//设置干扰弧线中心点的X轴定位
	// 	$wwy= rand(0,300);//设置干扰弧线中心点的Y轴定位
	// 	$www= rand(0,250);//设置干扰弧线宽度
	// 	$wwh= rand(0,150);//设置干扰弧线高度
	// 	$wws= rand(0,360);//设置干扰弧线起点角度
	// 	$wwe= rand(0,360);//设置干扰弧线终点角度
	// 	// for ($j=0; $j <5 ; $j++) { 
	// 	// 	for ($K=0; $K <5 ; $K++) { 
	// 	// 		imagearc($im, $wwx/4, $wwye/4, $wwxs+$j, $wwys+$K, $wwxe+$j, $wwye+$K, $randColor);
	// 	 		imagearc($im, $wwx, $wwy, $www, $wwh, $wws, $wwe, $randColor);//在画布上画一条弧线,参数(画布资源,中心点X,中心点Y,宽度,高度,起点角度,终点角度,颜色资源)
	// 	// 	}
	// 	// }
	// }
	if(!isset($_SESSION)){//通过判断变量$_SESSION是否设置来确认session是否开启
		session_start();//开始服务器session功能
	}
	$_SESSION['vcode']=strtolower($vcode);//将验证码字符串保存到$_SESSION中
	ob_clean();//调用函数bo_clean清除之前的输出
	header("Content-type: image/png;charset=utf-8");//设置浏览器头信息,内容为png格式的图片
	imagepng($im);//输出图片
	imagedestroy($im);//销毁图片资源
}


vcode();
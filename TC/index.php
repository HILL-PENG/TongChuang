<?php 
header("content-type:text/html;charset=utf-8");

include "model/init.php";

// require_once(CONTROLLER.M_MOT.DS.C_CTL.PH);

$path = CONTROLLER.M_MOT.DS.C_CTL.PH;

if(file_exists($path)){

	require_once($path);

}else{

	include "404.html";
}
// echo "this is index";
 ?>
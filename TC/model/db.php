<?php

//数据库连接

function conn(){  
    global  $mysqli;

    $mysqli = new mysqli(HOST,ROOT_NAME,ROOT_PASS,DBNAME) or die('数据库连接失败');

    $mysqli->set_charset(CHARSET_NAME);
}


	// $con = mysql_connect("localhost","root","root");
	// if (!$con)
 //    {
 //    	die('Could not connect: ' . mysql_error());
 //    }

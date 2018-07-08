<?php
function select_assoc($mysqli,$sql){  //查询一条数据
     // var_dump($mysqli);die;
     $result = $mysqli->query($sql);
     // var_dump($result);die;
     $row = $result -> fetch_array(MYSQLI_ASSOC);

     return $row;
}


function select_list($mysqli,$sql){ //查询多条数据

    $result = $mysqli->query($sql);
    // var_dump($result);
    $data =[];
    while($row = $result->fetch_assoc()) {  //fetch_assoc()
        $data[] = $row;
    }

    return $data;
}


function insert_into($mysqli,$sql){

    $mysqli->query($sql);
    // var_dump($mysqli->query($sql));
    $result = $mysqli->insert_id;

    if(!$result){
        return false;
    }
    return $result;
}


function insert($data,$table){

    global  $mysqli;

    if(!is_array($data)){
        return false;
    }

    $keys = '';
    $values = '';
    
    foreach ($data as $key => $value) {
        $keys .= $key.",";
        $values .= "'".$value."',";
    }

    // echo $keys;
    $k = rtrim($keys,',');
    $v = rtrim($values,',');
    // echo $values;


    $sql = "insert into $table($k) values($v)";//$v
    // echo $sql;die;
    $result = insert_into($mysqli,$sql);
    // var_dump($result);die;

    if(!$result){
        return false;
    }

    return $result;
}


function delete($sql){
    global $mysqli;
    // $result = mysqli_query($mysqli,$sql);
    $result = $mysqli ->query($sql);
    // var_dump($result);die;
    if(($mysqli->affected_rows)!=0){
        return true;
    }else{
        return false;
    }
}


function update($table,$data,$condition){
    global $mysqli;
    $set='';
    // echo "<pre>";
    // var_dump($data);die;
   foreach ($data as $keys=>$values){
        $set.= $keys.' = '."'".$values."',";
    }
    $set = rtrim($set,',');
    $sql="update $table set $set where $condition";
    $result = $mysqli ->query($sql);
    // var_dump($result);die;
    return $result;
}
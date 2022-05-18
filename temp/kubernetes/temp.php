<?php
$host = "mysql"; //IP of your database
$userName = "root"; //Username for database login
$userPass = "AdpcA6211"; //Password associated with the username
$database = "webapp"; //Your database name

$connectQuery = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `webapp` ORDER BY `name` ASC";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
}
?>
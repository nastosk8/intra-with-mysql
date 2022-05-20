<?php
header("Location: http://192.168.5.135.nip.io/zoznam.php");
$link = mysqli_connect("mysql", "root", "AdpcA6211", "webapp");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$surname = mysqli_real_escape_string($link, $_REQUEST['surname']);
$department = mysqli_real_escape_string($link, $_REQUEST['department']);
$phonenumber = mysqli_real_escape_string($link, $_REQUEST['phonenumber']);

// Attempt insert query execution
$sql = "INSERT INTO webapp (name, surname, department, phonenumber ) VALUES ('$name', '$surname', '$department', '$phonenumber' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);

end:
echo 'j hit 17';
?>